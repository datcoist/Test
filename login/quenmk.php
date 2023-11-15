<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
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
        <form action="" method="post">
            <h1>Quên Mật Khẩu</h1>
            <form action="" method="post">
                <div>
                    <p>Nhập email</p>
                    <input class="input-box"  type="email" name="email" placeholder="Email">
                    <span style="color: red;">
                        <?php if (isset($email_err)) {
                            echo $email_err;
                        } ?>
                    </span>
                </div>
                <?php
                if (isset($select_password) && is_array($select_password)) {
                    extract($select_password);
                    echo '<span style="color:green">Mật khẩu của bạn là: </span>' . $pass;

                }
                ?>
                <input type="submit" class="btn" name="quen_mk" value="Lấy Lại Mật Khẩu">
            </form>
    </div>
</body>

</html>