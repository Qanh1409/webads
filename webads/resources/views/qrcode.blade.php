<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị mã QR</title>
</head>
<body>
    <h1>Mã QR của bạn:</h1>
    <img src="{{ asset('storage/' . $imagePath) }}" alt="Mã QR">
    <h1></h1>
</body>
</html>
