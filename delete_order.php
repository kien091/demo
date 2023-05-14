<?php
    require_once("./connect.php");

    $id_order = $_GET['id_order'];
    $sql = "DELETE FROM torder WHERE id_order = '$id_order'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    $id_account = $_GET['id'];
    if(isset($_GET['from'])){
        header("Location: ./history_order.php?id=$id_account");
    }else{
        header("Location: ./admin.php?id=$id_account");
    }

?>