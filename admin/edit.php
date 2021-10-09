<!DOCTYPE html>
<html>
    <head> 
    </head>
    <body>
        <?php
            include('../config/koneksi.php');
            $id=$_GET['id'];
            $query="SELECT * FROM menu WHERE id='$id'";
            $result=mysqli_query($koneksi, $query);
        ?>
        
        <table>
            <form method="post" action="../controller/admin_edit_control.php" >
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> Id </td>
                    <td> <input type="number" name="id" value="<?php echo $row['id'];?>" readonly="readonly"> </td>
                </tr>
                <tr>
                    <td> Nama Produk </td>
                    <td> <input type="text" name="name" value="<?php echo $row['name'];?>"> </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td> <input type="text" name="description" value="<?php echo $row['description'];?>"> </td>
                </tr>
                <tr>
                    <td> Harga </td>
                    <td> <input type="number" name="price" value="<?php echo $row['price'];?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="edit" value="Edit Data"></td>
                </tr>
                <?php
                    }
                ?>
        </form>
    </table>
    </body>
</html>