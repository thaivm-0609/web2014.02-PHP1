<?php
    session_start();

    /** Nếu có thông tin session (đã đăng nhập) -> cho vào profile
     * ngược lại thì đẩy về trang login (form.php)
     */
    if (isset($_SESSION['user'])) {

    } else {
        header('location: ./form.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang profile</h1>
</body>
</html>