<?php
    require_once("./connect.php");

    $id_customer= $_GET['id_account'];
    $sql = "DELETE FROM account WHERE id_account = '$id_customer'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    $id_account = $_GET['id'];
    header("Location: ./admin.php?id=$id_account");
?>