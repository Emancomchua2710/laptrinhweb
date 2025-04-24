@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="mb-4">Màn hình chi tiết</h3>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Username</strong></td>
                                <td>{{ $messi->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>{{ $messi->email }}</td>
                            </tr>
                            <!-- Các trường khác có thể thêm ở đây nếu cần -->
                        </table>
                        <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-primary">
                            Chỉnh sửa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection