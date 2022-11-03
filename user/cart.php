<?php  //include connection file
include('./../connection/koneksi.php');
 // using to hide undefine undex errors

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twelve Kitchen | Checkout</title>
    <link rel="icon" href="img/admin/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/stylein.css">
    <link rel="stylesheet" href="./../css/css.css">


</head>
<body>
    
<!-- header section starts  -->

<?php 
include("./view/header.php")
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>our <span>cart</span>   session</h3>
        
    </div>

</section>

<!-- home section ends -->
<section>
<div class="cart-page">

<?php
    if(!empty($_SESSION["cart"])){
        ?>
        

        <table>
            <tr>
                <th>No. </th>
                <th>Produk</th>
                <th>Quantity</th>
                <th>harga</th>
                
                <th>Subtotal</th>
                <th>action</th>
                
                
            </tr>
            <?php
            $total = 0;
                $no=1;
                
                foreach($_SESSION["cart"] as $cart => $val){
            ?>
            <form method="post">
            <tr>
                <td><?php echo $no++ ?></td>
                <td>
                    <div class="cart-info">
                        <img src="../img/kue/<?php echo $val["gambar"] ?>" alt="">
                        <div class="produk-name">
                            <h4><?php echo $val["namakue"] ?></h4>
                            <small><?php echo $val["deskripsi"] ?></small>
                            
                            
                        </div>
                    </div>
                </td>
                
                <td><input type="number" name="jumlah" id="" value="<?php echo $val["jumlah"]?>"> pcs</td>
                <td>Rp. <?php echo $val["harga"]?></td>
                <?php $sub = $val["jumlah"] * $val["harga"];
                        
                ?>
                <td>Rp. <?php echo  $sub ?></td>
                <td>
                <a href="view/delete.php?id=<?php echo $cart?>" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash" style="font-size:16px"></i></a>
            </td>
            </tr>
            </form>
                <?php 
                        $total += $sub;
                    } 
                ?>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    
                    <td>Total</td>
                    <td>Rp. <?php echo $total?></td>
                    <td><a href="view/check.php?id=<?php echo $cart?>" class="btn btn-primary" role="button">Checkout</a></td>
                </tr>
                
            </table>
            <?php
    }else{
        echo "belum ada Produk yang ditambahkan";
    }

?>
        </div>
    </div>
    
</section>


<?php 

include("../view/footer.php");
?>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./../js/script.js"></script>

</body>
</html>