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
    <link rel="stylesheet" href="../assets/css/style_admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <div class="top">
        <div class="container">
            <h1><a href="#" id="logo">Restoran Pokok Wareg</a></h1>
            <header>
                <nav class="nav npc">
                    <a href="home.php" class="nav-item is-active" active-color="rgb(119, 58, 0)">Home</a>
                    <a href="../controller/logout_control.php" class="nav-item" active-color="rgb(119, 58, 0)">Log Out</a>
                    <span class="nav-indicator"></span>
                </nav>
            </header>
        </div>
    </div>
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
                    <p style="margin-bottom: 10px"><?= $menu['description']; ?></p><br>
                    <h2 style="margin-bottom: 5px"><?= $menu['price']; ?></h2><br>
                    <a href="edit.php?id=<?= $menu['id']; ?>" class="btn_edit" type="button" id="btn_edit" name="btn_edit">Edit</a>
                    <a href="../controller/delete_menu_control.php?action=delete&id=<?= $menu['id']; ?>" class="btn_delete" type="button" id="btn_delete" name="btn_delete">Delete</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="judul-container1">
        <h1>Add New Item Menu</h1>
        <hr>
    </div>

    <div class="regis-box">
        <div class="container-tiga">
            <form action="../controller/admin_home_control.php" method="POST" id="form" enctype="multipart/form-data">
                <input type="text" id="name" name="name" placeholder="Name">
                <input type="text" id="desc" name="desc" placeholder="Description">
                <input type="text" id="price" name="price" placeholder="Price">
                <input type="file" id="image" name="image" placeholder="Image">
                <input type="submit" name="btn_add" value="Add" class="btn_login"></input>
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