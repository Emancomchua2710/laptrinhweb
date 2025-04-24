@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h3 class="text-center mb-4">Danh sách User</h3>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $users->firstItem() + $index }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                        {{ $role->name . ' ' }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="text-primary">Edit</a> |
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="text-info">View</a> |
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" 
                                   class="text-danger" onclick="return confirm('Bạn có chắc muốn xóa user này không?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <!-- Phân trang -->
            <div class="d-flex justify-content-center mt-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</main>
@endsection