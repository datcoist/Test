<?php
function dangnhap($user, $pass)
{
    $sql = "SELECT * FROM `user` WHERE `ho_ten` = '" . $user . "' AND `pass` = '" . $pass . "'";
    $result = pdo_query_one($sql);
    return $result;
}
function dangky($user, $pass, $email)
{
    $sql = "INSERT INTO `user`
                (`ho_ten`,`pass`,`email`)
                VALUES ('$user','$pass','$email')
        ";
    pdo_execute($sql);
}

?>