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
    <title>About - Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="../assets/css/style_user.css">
</head>

<body>

    <div class="top">
        <div class="container">
            <h1><a href="#" id="logo">Restoran Pokok Wareg</a></h1>
            <header>
                <nav class="nav npc">
                    <a href="home.php" class="nav-item" active-color="rgb(119, 58, 0)">All Menu</a>
                    <a href="about.php" class="nav-item is-active" active-color="rgb(119, 58, 0)">About Us</a>
                    <a href="../controller/logout_control.php" class="nav-item" active-color="rgb(119, 58, 0)">Log Out</a>
                    <span class="nav-indicator"></span>
                </nav>
            </header>
        </div>
    </div>
    <div class="hero"></div>

    <div class="judul-container1">
        <h1>About Us</h1>
        <hr>
    </div>
    <div class="container-dua">
        <div class="layanan satu">
            <h4>Layanan 1</h4>
            <p>
                Gabungan atas semua situs yang dapat diakses publik di Internet
                disebut pula sebagai World Wide Web atau lebih dikenal dengan singkatan WWW. Meskipun setidaknya
                halaman
                beranda situs
            </p>
        </div>
        <div class="layanan dua">
            <h4>Layanan 2</h4>
            <p>
                Gabungan atas semua situs yang dapat diakses publik di Internet
                disebut pula sebagai World Wide Web atau lebih dikenal dengan singkatan WWW. Meskipun setidaknya
                halaman
                beranda situs
            </p>
        </div>
        <div class="layanan tiga">
            <h4>Layanan 3</h4>
            <p>
                Gabungan atas semua situs yang dapat diakses publik di Internet
                disebut pula sebagai World Wide Web atau lebih dikenal dengan singkatan WWW. Meskipun setidaknya
                halaman
                beranda situs
            </p>
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