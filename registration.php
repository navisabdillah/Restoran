<?php

include('config/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Registration - Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="assets/css/style_regis.css">
</head>

<body>

    <div class="regis-box">
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>
        <form action="controller/registration_control.php" method="POST" id="form">
            <h2 class="title">Registration</h2>
            <h1 class="name_web">Restoran Pokok Wareg</h1>
            <hr><br>

            <?php
            session_start();

            if (isset($_SESSION['msg_registration']) && $_SESSION['msg_registration'] <> '') {
                echo '<div style="font-size:12px; color:white; margin-bottom:10px; padding:10px; border-radius:8px; background-color: rgba(172, 27, 27, 0.9);">' . $_SESSION['msg_registration'] . '</div>';
            }

            $_SESSION['msg_registration'] = '';

            session_destroy();
            ?>

            <input type="text" id="name" name="name" placeholder="Full Name" required="" oninvalid="this.setCustomValidity('Enter your name!')" oninput="setCustomValidity('')">
            <input type="email" id="email" name="email" placeholder="Email" required="" oninvalid="this.setCustomValidity('Enter your email!')" oninput="setCustomValidity('')">
            <input type="text" id="address" name="address" placeholder="Address" required="" oninvalid="this.setCustomValidity('Enter your address!')" oninput="setCustomValidity('')">
            <input type="number" id="phone" name="phone" placeholder="Phone" required="" oninvalid="this.setCustomValidity('Enter your number phone!')" oninput="setCustomValidity('')">
            <input type="password" id="password" name="password" placeholder="Password" required="" oninvalid="this.setCustomValidity('Enter your password!')" oninput="setCustomValidity('')">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="" oninvalid="this.setCustomValidity('Enter your confirm password!')" oninput="setCustomValidity('')">
            <input type="submit" name="btn_registration" value="Registration" class="btn_login"></input>
            <p>Do you have an account?<a href="login.php" id="link_res"> Login!</a></p>
        </form>
    </div>

</body>

</html>