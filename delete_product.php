<?php
    require_once("./connect.php");

    $id_product = $_GET['id_product'];
    $sql = "DELETE FROM product WHERE id_product = '$id_product'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    $id_account = $_GET['id'];
    header("Location: ./admin.php?id=$id_account");
?>