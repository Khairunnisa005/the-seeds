<?php

include "../backend/conn.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if($user = mysqli_fetch_assoc($check)){
        if(password_verify($password, $user['password'])){
            $_SESSION['login']=true;
            echo '<script>
            alert ("Welcome to The Seeds Concert!");
            window.location.href = "../index.php";
            </script>';
        }else {
            echo '<script>
            alert ("Incorrect Password!");
            window.location.href = "login.php";
            </script>';
        }
    }else {
        echo '<script>
            alert ("Email not found!");
            window.location.href = "login.php";
            </script>';
    }
}

if(!isset($_SESSION['login'])){

}else{
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Seeds</title>
    <link rel="stylesheet" href="../assets/css/regis-login.css">
    <style>
        .login-link {
            text-align: center;
            font-size: 15px;
            margin-top: 15px;
        }

        .login-link a {
            text-decoration: none;
            color: #6930C3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form class="user" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <div class="password-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    <span class="password-toggle" id="togglePassword">
                        <img src="../assets/images/eye-slash.png" style="width: 17px; height: auto; margin-top: 5px;">
                    </span>
                </div>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="login-link">
            Doesn't have an account? <a href="registrasi.php">Registrasi</a>
        </div>
    </div>
    <script src="../assets/js/regis-login.js"></script>
</body>
</html>