<?php

include('../config/koneksi.php');
session_start();

$sql_select_menu = "SELECT * FROM menu";
$all_menu = mysqli_query($koneksi, $sql_select_menu);

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id_menu = $_GET['id'];
    $sql_select = mysqli_query($koneksi, "SELECT * FROM menu WHERE id='$id_menu'");
    if (mysqli_num_rows($sql_select)) {
        $data_menu = mysqli_fetch_array($sql_select);
        $sql_delete_menu = mysqli_query($koneksi, "DELETE FROM menu WHERE id = '$id_menu'");

        unlink('../uploads/' . $data_menu['image']);

        if (!$sql_delete_menu) {
            die('Query error: ' . mysqli_error($koneksi));
        } else {
            header('location:../admin/home.php');
        }
    }
}
