<?php 

require_once('config/koneksi.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Login - Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="assets/css/style_login.css">
</head>

<body>
    <div class="container">
        <div class="kiri"></div>
        <div class="kanan">
            <div class="logo">
                <img src="assets/img/logo.png" alt="">
            </div>
            <form action="controller/login_control.php" method="POST" id="form">
                <h2 class="title">Login</h2>
                <h1 class="name_web">Restoran Pokok Wareg</h1>
                <hr><br>
                <?php
                session_start();

                if (isset($_SESSION['msg_registration']) && $_SESSION['msg_registration'] <> '') {
                    echo '<div style="font-size:12px; color:white; margin-bottom:10px; padding:10px; border-radius:8px; background-color: rgba(1, 112, 44, 0.9)">' . $_SESSION['msg_registration'] . '</div>';
                }

                $_SESSION['msg_registration'] = '';

                if (isset($_SESSION['msg_login_error']) && $_SESSION['msg_login_error'] <> '') {
                    echo '<div style="font-size:12px; color:white; margin-bottom:10px; padding:10px; border-radius:8px; background-color: rgba(172, 27, 27, 0.9);">' . $_SESSION['msg_login_error'] . '</div>';
                }

                $_SESSION['msg_login_error'] = '';

                if (isset($_SESSION['msg_login_success']) && $_SESSION['msg_login_success'] <> '') {
                    echo '<div style="font-size:12px; color:white; margin-bottom:10px; padding:10px; border-radius:8px; background-color: rgba(1, 112, 44, 0.9)">' . $_SESSION['msg_login_success'] . '</div>';
                }
                
                $_SESSION['msg_login_success'] = '';

                if (isset($_SESSION['msg_logout']) && $_SESSION['msg_logout'] <> '') {
                    echo '<div style="font-size:12px; color:white; margin-bottom:10px; padding:10px; border-radius:8px; background-color: rgba(172, 27, 27, 0.9);" >' . $_SESSION['msg_logout'] . '</div>';
                }

                $_SESSION['msg_logout'] = '';

                session_destroy();
                ?>
                <input type="text" id="email" name="email" placeholder="Email" required="" oninvalid="this.setCustomValidity('Enter your email!')" oninput="setCustomValidity('')">
                <input type="password" id="password" name="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Enter your password!')" oninput="setCustomValidity('')">
                <input type="submit" name="btn_login" value="Login" class="btn_login"></input>
                <p>Don't you have an account?<a href="registration.php" id="link_res"> Create an Account!</a></p>
                
            </form>
        </div>
    </div>
</body>

</html>