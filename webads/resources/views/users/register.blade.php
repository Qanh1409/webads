<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Đăng Ký Tài Khoản</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên Khách Hàng</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên của bạn" required>
                                @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
                                @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Số Điện Thoại</label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Tùy chọn">
                                @if ($errors->has('phone_number'))
                                <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="address">Địa Chỉ</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Tùy chọn">
                                @if ($errors->has('address'))
                                <small class="text-danger">{{ $errors->first('address') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Mật Khẩu</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu của bạn" required>
                                @if ($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Xác Nhận Mật Khẩu</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu" required>
                                @if ($errors->has('password_confirmation'))
                                <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>