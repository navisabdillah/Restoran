<?php
include('../config/auto_load.php');
include('../controller/admin_home_control.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Admin - Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="../assets/css/style_home_admin.css">
</head>

<body>

    <div class="top">
        <div class="container">
            <h1><a href="#" id="logo">Restoran Pokok Wareg</a></h1>
            <header>
                <nav class="nav npc">
                    <a href="home.php" class="nav-item" active-color="rgb(119, 58, 0)">Home</a>
                    <a href="add.php" class="nav-item is-active" active-color="rgb(119, 58, 0)">Add Menu</a>
                    <a href="../controller/logout_control.php" class="nav-item" active-color="rgb(119, 58, 0)">Log Out</a>
                    <span class="nav-indicator"></span>
                </nav>
            </header>
        </div>
    </div>

    <?php
    session_start();

    if (isset($_SESSION['msg_delete']) && $_SESSION['msg_delete'] <> '') {
        echo '<div style="font-size:12px; color:white; margin: 70px auto; width:200px; text-align:center; padding:10px; border-radius:8px; background-color: rgba(1, 112, 44, 0.9)">' . $_SESSION['msg_delete'] . '</div>';
    }
    $_SESSION['msg_delete'] = '';
    ?>

    <div class="judul-container1">
        <h1>Add New Menu</h1>
        <hr>
    </div>

    <div class="regis-box">
        <div class="container-tiga">
            <form action="controller/registration_control.php" method="POST" id="form">
                <input type="text" id="name" name="name" placeholder="Name" >
                <input type="text" id="desc" name="desc" placeholder="Description" >
                <input type="text" id="price" name="price" placeholder="Price" >

                <input type="submit" name="btn_registration" value="Add" class="btn_login"></input>
            </form>
        </div>
    </div>


    <div class="footer">
        <p class="copy">Copyright &copy2020. Created by Devi Puspitasari & Fitri Mutiara Devi</p>
    </div>

    <script src=" https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>
    <script src="../assets/js/script.js"></script>
</body>

</html>