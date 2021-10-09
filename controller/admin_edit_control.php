<?php
include('../config/koneksi.php');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$query= "UPDATE menu SET name = '$name', description = '$description', price = '$price'
        WHERE id = '$id'";
	$result=mysqli_query($koneksi, $query); 

if ($result) {
		echo "Berhasil update data ";
		header('location:../admin/home.php');			
	}else{
		echo "Gagal update data".mysqli_error($koneksi);
	}
?>