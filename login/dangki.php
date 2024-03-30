<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="dangki.css">
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="xuly_dangki.php" method="post">
    <table border="1" cellpadding="5" cellspacing="0" width="500" align="center">
    <tr>
        <td>Họ và tên </td>
        <td><input type="text" name="username" placeholder="Nhập họ và tên"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" placeholder="Nhập email"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="password" placeholder="Nhập mật khẩu"></td>
    </tr>
    <tr>
        <td>Số điện thoại</td>
        <td><input type="text" name="phone_number" placeholder="Nhập số điện thoại"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="address" placeholder="Nhập địa chỉ"></td>
    </tr>
</table>
    <tr>
    <input type="submit" value="Đăng kí">
    </tr>
</form>
</body>
</html>
