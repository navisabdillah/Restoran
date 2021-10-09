<?php 
session_start();
require '../config/koneksi.php';
require '../controller/item_control.php';
//Simpan pesanan baru
$id_user = $_SESSION['id_users'];
$sql1 = "INSERT INTO orders (name, id_user) VALUES ('Order', '".$id_user."')";
$result = mysqli_query($koneksi, $sql1);
if($result){
    $ordersid = mysqli_insert_id($koneksi); 
    $cart = unserialize(serialize($_SESSION['cart'])); //Set $cart sebagai array, serialize () mengubah string menjadi array
    for($i=0; $i<count($cart);$i++) {
        $sql2 = 'INSERT INTO orderdetail (productid, orderid, price, quantity) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
        mysqli_query($koneksi, $sql2);
    }
    //Menghapus semua produk dalam keranjang
    unset($_SESSION['cart']);
    ?>
    Thanks for buying products. Click <a href="home.php">here</a> to continue purchasing products.
    <?php
}else{
    echo mysqli_error($koneksi);
}
?>