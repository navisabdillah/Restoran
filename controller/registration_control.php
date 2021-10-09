<?php 

include('../config/koneksi.php');
session_start();

if (isset($_POST['btn_registration'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);

    if ($password != $confirm_password) {
        $_SESSION['msg_registration'] = "Your password not same!";
        header('location:../registration.php');
    }

    $sql_insert_user = "INSERT INTO users (name, email, address, phone, password, level) VALUES  
        ('$name', '$email', '$address', '$phone', '$password', 'user')";
    
    $result_insert_user = mysqli_query($koneksi, $sql_insert_user);

    if ($result_insert_user) {
        $_SESSION['msg_registration'] = "Registration Success! Please, Login with use your email and password!";
        header('location:../login.php');
    } else {
        $_SESSION['msg_registration'] = "Email is already registered! Use another email!";
        header('location:../registration.php');
    }
} else {
    header('location:../registration.php');
}

?>