<?php
// product là danh mục sản phẩm
// product-detail là sản phẩm chi tiết
session_start();

// print_r($_SESSION["coi"]);

if (!isset($_SESSION["coi"])) {
    header("./login/dn.php");
}


include "./view/header.php";
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            include "../view/chitietsanpham.php";
            break;

        case 'dangxuat':


            break;
    }
}
// session_destroy();

include "./view/main.php";
include "./view/footer.php";

?>