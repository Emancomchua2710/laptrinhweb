<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    /**
     * Login page
     */
    public function login()
    {
        return view('crud_user.login');
    }

    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['messi' => $user]);
    }

    public function listUser()
    {
        if (Auth::check()) {
            $users = User::with('roles')   
             ->paginate(10);
            // $user = User::with('orders')->find($id);
           
            return view('crud_user.list', ['users' => $users]);
        }
    
        return redirect("login")->withSuccess('Bạn không có quyền truy cập.');
    }

    public function createUser()
    {
        return view('crud_user.registration');
    }
    
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'age' => 'nullable|integer|min:1|max:120',
            'github_link' => 'nullable|url', 
             'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();

     
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'age' => $request->age,
            'github_link' => $request->github_link, 
            'avatar' => $avatarPath,
        ]);
    
        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    }
    
    
public function updateUser(Request $request)
{
    $user_id = $request->get('id');
    $user = User::find($user_id);

    return view('crud_user.update', ['user' => $user]);
}
    
public function postUpdateUser(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$request->id,
        'password' => 'nullable|min:6', 
        'age' => 'nullable|integer|min:1|max:120',
        'github_link' => 'nullable|url',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::find($request->id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->age = $request->age;
    $user->github_link = $request->github_link;
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $avatarPath;
    }
    $user->save(); 

    return redirect("list")->withSuccess('Cập nhật thành công');
}




public function deleteUser(Request $request) {
    $user_id = $request->get('id');
    $user = User::destroy($user_id);

    return redirect("list")->withSuccess('You have signed-in');
}

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
