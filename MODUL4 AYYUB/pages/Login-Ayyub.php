<?php

session_start();

require('../config/connector.php');

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn_user, "SELECT * FROM user_ayyub WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION['login'] = true;
            
            // remember me
            if ( isset($_POST['remember'])) {
                setcookie('login', 'true', time() + 120);
            }

            header("Location: Home-Ayyub.php");
            exit;
        } else {
            echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
            echo 'Username atau password salah! ';
            echo '</div>';
        }
    } else {
        echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
        echo 'Username atau password salah! ';
        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <link rel="shortcut icon" href="../asset/images/logo-ead.png" type="image/x-icon">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Ayyub | Login</title>
</head>

<body style="background-image: url('../asset/images/login_image.png');">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 bg-light" style="height: 1080px;">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <br><br><br><br><br><br><br><br><br>
                        <h1>Login</h1>
                        <form action="" method="post">
                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Email</label>
                                <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input required type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name='remember' id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" value='true'>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary px-4 mt-4 mb-3" name="login">Login</button>
                            <br>
                            <span>Anda belum punya akun? <a href="Register-Ayyub.php">Daftar</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>