@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <h3 class="card-header text-center text-primary">Màn hình cập nhật</h3>
                    <div class="card-body">
                        <form action="{{ route('user.postUpdateUser') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="id" type="hidden" value="{{ $user->id }}">

                            <div class="form-group mb-3">
                                <label for="name" class="text-secondary">Username</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       value="{{ $user->name }}" required autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="text-secondary">Mật khẩu</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="text-secondary">Nhập lại mật khẩu</label>
                                <input type="password" id="password_confirmation" class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="text-secondary">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                       value="{{ $user->email }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-grid mx-auto text-center">
                                <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection