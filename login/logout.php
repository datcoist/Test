<?php
session_start();
if ($_SESSION['coi']) {
    unset($_SESSION['coi']);
    header("location:../index.php");
    // echo '<script>window.location.href = "../index.php"</script>';
}

?>

<h1>Hello</h1