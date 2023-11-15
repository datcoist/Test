<?php
include("../model/pdo.php");
include("../model/taikhoan.php");

session_start();

if (!isset($_SESSION['coi'])) {

    if (isset($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        dangky($user, $pass, $email);
        $successDangky = "Chúc mừng bạn đã đăng ký thành công";
        header("Location:../login/dn.php");
        exit();
    }
}

// include "./login/dangky.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/dky.css">

</head>

<body>
    <div class="wrapper">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Đăng Ký</h1>
            <div
                style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successDangky) && $successDangky != "") ? $successDangky : "" ?>

            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" name="user" value="<?= isset($user) ? $user : "" ?>">
                <box-icon type='solid' name='user'></box-icon>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" name="email" value="<?= isset($email) ? $email : "" ?>">
                <box-icon type='solid' name='envelope'></box-icon>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="pass" value="<?= isset($pass) ? $pass : "" ?>">
                <box-icon type='solid' name='lock-alt'></box-icon>
            </div>

            <input type="submit" class="btn" value="Đăng Ký" name="dangky">

            <div class="register-link">
                <p>Bạn đã có tài khoản?<a href="./dn.php">Đăng Nhập</a></p>
            </div>
        </form>
    </div>
</body>

</html>