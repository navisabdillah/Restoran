<?php 

include('../config/koneksi.php');
session_start();

if (isset($_POST['btn_login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql_select_user = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result_select_user = mysqli_query($koneksi, $sql_select_user);
    $count = mysqli_num_rows($result_select_user);

    if ($count > 0) {
        while ($data_user = mysqli_fetch_array($result_select_user)) {
            $_SESSION['status'] = 'login';
            $_SESSION['id_users'] = $data_user['id'];
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['level'] = $data_user['level'];

            if ($data_user['level'] == 'admin') {
                header('location:../admin/home.php');
            } else if ($data_user['level'] == 'user') {
                header('location:../user/home.php');
            } 
        }
    } else {
        if ($username = " " || $password = " ") {
            $_SESSION['msg_login_error'] = "Email or password cannot be empty!";
            header('location:../login.php');
        }
        if ($password != 'password') {
            $_SESSION['msg_login_error'] = "Email or password is wrong!";
            header('location:../login.php');
        }
    }
} else {
    header('location:../login.php');
}
