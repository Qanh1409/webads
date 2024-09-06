<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý xe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý khách hàng</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            @auth
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Dashboard</span>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <p class="nav-link"> Hello {{ Auth::user() -> name }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Content Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- Main Content -->
                <!-- Thêm nội dung khác tại đây -->
            </main>
            @else

            <!-- Unauthorized Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 text-center">
                <h1>Bạn cần đăng nhập</h1>
                <a href="{{ route('user.login') }}" class="btn btn-primary">Đăng nhập</a>
            </div>
            @endauth

        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
