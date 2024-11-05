<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
        }
    </style>
</head>

<body>
    <div class="container login-container mt-5">
        @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header text-center">
                <h4>Đăng Nhập</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.signin') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>

                        @if ($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Mật Khẩu</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu của bạn" required>

                        @if ($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                        <label for="remember_me" class="form-check-label">Ghi nhớ đăng nhập</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="/password/reset">Quên mật khẩu?</a> | <a href="{{route('user.register')}}">Đăng ký</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>