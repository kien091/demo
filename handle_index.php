<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/toast_message.css">
    <script src="./assets/js/toast_message.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <?php
        require_once("./connect.php");
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $check_admin = "SELECT * FROM account WHERE email = '$email'";
        $role = mysqli_fetch_assoc(mysqli_query($conn, $check_admin))['role'];
        $id_account = mysqli_fetch_assoc(mysqli_query($conn, $check_admin))['id_account'];
        if($role == 0){
            header("Location: ./admin.php?id=$id_account");
        }
        else{
            header("Location: ./home.php");
        }
        mysqli_close($conn);
    ?>
</body>
</html>