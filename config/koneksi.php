<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "db_restoran";

$koneksi = mysqli_connect($hostname, $username, $password, $db_name);

if ($koneksi) {
    echo "Koneksi ke MySQL berhasil: ";
    
} else{
	echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
}


?>