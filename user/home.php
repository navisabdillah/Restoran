<?php
include('../config/auto_load.php');
include('../controller/user_home_control.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="../assets/css/style_user.css">
</head>

<body>

    <div class="top">
        <div class="container">
            <h1><a href="#" id="logo">Restoran Pokok Wareg</a></h1>
            <header>
                <nav class="nav npc">
                    <a href="home.php" class="nav-item is-active" active-color="rgb(119, 58, 0)">All Menu</a>
                    <a href="about.php" class="nav-item" active-color="rgb(119, 58, 0)">About Us</a>
                    <a href="cart.php" class="nav-item" active-color="rgb(119, 58, 0)">Cart</a>
                    <a href="../controller/logout_control.php" class="nav-item" active-color="rgb(119, 58, 0)">Log Out</a>
                    <span class="nav-indicator"></span>
                </nav>
            </header>
        </div>
    </div>
    <div class="hero"></div>


<div class="judul-container1">
    <h1>All Menu</h1>
    <hr>
</div>

<div class="container-tiga">
    <?php while ($menu = mysqli_fetch_array($all_menu)) {  ?>
        <div class="card">
            <div class="header">
                <img src="../uploads/<?= $menu['image']; ?>">
            </div>
            <div class="content">
                <h2 style="margin-bottom: 5px"><?= $menu['name']; ?></h2>
                <p style="margin-bottom: 10px"><?= $menu['description']; ?></p>
                <h2 style="margin-bottom: 5px"><?= $menu['price']; ?></h2><br><br>
                <a href="cart.php?id= <?= $menu['id']; ?> &action=add" class="btn_buy" type="button" id="btn_buy" name="btn_buy">Buy Now</a>
            </div>
        </div>
    <?php } ?>
</div>

<div class="footer">
    <p class="copy">Copyright &copy2020. Created by Devi Puspitasari & Fitri Mutiara Devi</p>
</div>

<script src=" https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
</script>
<script src="../assets/js/script.js"></script>
</body>

</html>