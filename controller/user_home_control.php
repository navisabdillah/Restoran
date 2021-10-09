<?php 

include('../config/koneksi.php');

$sql_select_menu = "SELECT * FROM menu";
$all_menu = mysqli_query($koneksi, $sql_select_menu);

?>