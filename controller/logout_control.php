<?php

session_start();

session_destroy();

session_start();
$_SESSION['msg_logout'] = "Anda berhasil logout";
header('location:../login.php');

?>