<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo.png">
    <title>Restoran Pokok Wareg</title>
    <link rel="stylesheet" href="../assets/css/style_user.css">
</head>
<body>
<?php
    session_start();
    require '../config/koneksi.php';
    require '../controller/item_control.php';
    
    if(isset($_GET['id']) && !isset($_POST['update']))  { 
        $sql = "SELECT * FROM menu WHERE id=".$_GET['id'];
        $result = mysqli_query($koneksi, $sql);
        $product = mysqli_fetch_object($result); 
        $item = new Item();
        $item->id = $product->id;
        $item->name = $product->name;
        $item->price = $product->price;
        $iteminstock = $product->quantity;
        $item->quantity = 1;
        //Periksa produk dalam keranjang
        $index = -1;
        $cart = unserialize(serialize($_SESSION['cart']));
        for($i=0; $i<count($cart);$i++)
            if ($cart[$i]->id == $_GET['id']){
                $index = $i;
                break;
            }
            if($index == -1) 
                $_SESSION['cart'][] = $item; //$ _SESSION ['cart']: set $ cart sebagai variabel _session
            else {
                
                if (($cart[$index]->quantity) < $iteminstock)
                     $cart[$index]->quantity ++;
                     $_SESSION['cart'] = $cart;
            }
    }
    //Menghapus produk dalam keranjang
    if(isset($_GET['index']) && !isset($_POST['update'])) {
        $cart = unserialize(serialize($_SESSION['cart']));
        unset($cart[$_GET['index']]);
        $cart = array_values($cart);
        $_SESSION['cart'] = $cart;
    }
    // Perbarui jumlah dalam keranjang
    if(isset($_POST['update'])) {
      $arrQuantity = $_POST['quantity'];
      $cart = unserialize(serialize($_SESSION['cart']));
      for($i=0; $i<count($cart);$i++) {
         $cart[$i]->quantity = $arrQuantity[$i];
      }
      $_SESSION['cart'] = $cart;
    }
?>
<h1 class="container">Cetak Struk Pembelian</h1>
<br><br>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12">
        <form method="POST">
        <table id="t01" class="table table-bordered table-hover">
        <tr>
            <th class="text-center">Option</th>
            <th class="text-center">Id</th>
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
             
            <th class="text-center">Total</th>
        </tr>
        
        <?php 
            if(!isset($_SESSION['cart'])){
                ?>
                <tr>
                    <td colspan="6">Belum ada item di keranjang</td>
                </tr>
                <?php
            }else{
                $cart = unserialize(serialize($_SESSION['cart']));
                $s = 0;
                $index = 0;
                for($i=0; $i<count($cart); $i++){
                    $s += $cart[$i]->price * $cart[$i]->quantity;
            ?>	
            <tr>
                    <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
                    <td> <?php echo $cart[$i]->id; ?> </td>
                    <td> <?php echo $cart[$i]->name; ?> </td>
                    <td>Rp. <?php echo $cart[$i]->price; ?> </td>
                    <td> <input class="form-control price" type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
                    <td> Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?> </td> 
            </tr>
                <?php 
                    $index++;
                } ?>
                <tr>
                    <td colspan="6" style="text-align:right; font-weight:bold">
                    <input id="saveimg" type="image" src="../assets/img/save.png" width="50" name="update" alt="Save Button">
                    <input type="hidden" name="update">
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        </form>
    </div>
  </div>
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
      <table class="table table-bordered table-hover" id="tab_logic_total">
        <tbody>
          <tr>
            <th class="text-center">Grand Total</th>
            <?php
                if(!isset($_SESSION['cart'])){
                    ?>
                    <td class="text-center">Rp. 0</td>
                    <?php
                }else{
                    ?>
                    <td class="text-center">Rp.<?php echo $s; ?></td>
                    <?php
                }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<a class="text-center" href="home.php">Continue Shopping</a> | <a href="checkout.php">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</div>
<br>
<div class="footer">
    <p class="copy">Copyright &copy2020. Created by Devi Puspitasari & Fitri Mutiara Devi</p>
</div>
</body>
 </html>