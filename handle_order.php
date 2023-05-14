<?php
    require_once("./connect.php");

    $id_product = $_POST['submit'];
    $sql = "SELECT price FROM product WHERE id_product = '$id_product'";
    $price = mysqli_fetch_assoc(mysqli_query($conn, $sql))['price'];
    
    $quatity = $_POST['quantity'];
    $total_price = intval($price) * intval($quatity);
    $address = $_POST['address'];
    $id_account = $_GET['id'];
    $note = $_POST['note'];

    $insert = "INSERT INTO torder(id_product, quantity, total_price, address, id_account, note) VALUES('$id_product', '$quatity', '$total_price', '$address', '$id_account', '$note')";
    mysqli_query($conn, $insert);
    mysqli_close($conn);
    header("Location: ./home.php?id=$id_account");
?>