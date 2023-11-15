<?php
include("../model/pdo.php");
include("../model/taikhoan.php");

session_start();

if (!isset($_SESSION['coi'])) {

    if (isset($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = dangnhap($user, $pass);
        if (is_array($checkuser)) {
            $_SESSION['coi'] = $checkuser;
            header('Location: ../index.php');
            $success = "Đăng nhập thành công.";
            // header("Location: duan1/index.php");
        } else {
            $success = "Thông tin tài khoản hoặc mật khẩu không chính xác";
        }
    }
    // include "./login/dn.php"

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../login/dn.css   ">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <div style="text-align: center; color:red;">
            <?= (isset($success) && $success != "") ? $success : "" ?>
        </div>
        <!-- <form action="../index.php?act=dangnhap" method="post"> -->
        <form action="" method="post">
            <h1>Đăng Nhập</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="user" value="<?= isset($user) ? $user : "" ?>">
                <box-icon type='solid' name='user'></box-icon>
            </div>
            <div class="input-box">
                <input type="pass" placeholder="Password" name="pass" value="<?= isset($pass) ? $pass : "" ?>">
                <box-icon type='solid' name='lock-alt'></box-icon>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Ghi Nhớ Mật Khẩu</label>
                <a href="../login/quenmk.php">Quên Mật Khẩu</a>
            </div>

            <input type="submit" class="btn" name="dangnhap" value="Đăng Nhập">

            <div class="register-link">
                <p>Bạn chưa có tài khoản?<a href="./dky.php">Đăng Ký</a></p>
            </div>
        </form>
    </div>
</body>
<?php
} else {
?>
<?php
}
?>

</html>