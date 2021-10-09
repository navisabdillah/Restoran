<?php

include('../config/koneksi.php');

$sql_select_menu = "SELECT * FROM menu";
$all_menu = mysqli_query($koneksi, $sql_select_menu);

if (isset($_POST['btn_add'])) {
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $price = $_POST['price'];


    if ($_FILES['image']['name'] != '') {
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_store = "../uploads/" . $file_name;

        if (move_uploaded_file($file_tmp, $file_store)) {
            $sql_insert_menu = "INSERT INTO menu (name, description, price, image) VALUES  
                ('$name', '$description', '$price', '$file_name')";
        
            $result_insert_menu = mysqli_query($koneksi, $sql_insert_menu);
        
            if ($result_insert_menu) {
                header('location: ../admin/home.php');
            } 
        }
    }

}
