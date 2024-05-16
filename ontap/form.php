<?php
    session_start();

    if(isset($_POST['submit'])) { //hàm isset() để kiểm tra 1 biến có tồn tại hay không?
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if ($username=='thaivm2' && $password=='123456') {
            //lưu thông tin vào session để xác định ng dùng đã đăng nhập hay chưa
            $_SESSION['user'] = $username;
            //lưu thông tin vào cookies, có thời gian hết hạn là 1 ngày (86400s)
            setcookie('user', $username, time() + 86400);
            echo "Đăng nhập thành công";
        } else {
            echo "Đăng nhập thất bại";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ôn tập PHP</title>
</head>
<body>
    <form action="./form.php" method="GET">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>
        <input type="submit" name="submit" value="Đăng nhập">
    </form>
</body>
</html>