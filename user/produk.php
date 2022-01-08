<?php
include("./../connection/koneksi.php");  //include connection file
include("./cart.php");
error_reporting(0);  // using to hide undefine undex errors

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twelve Kitchen</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/stylein.css">

</head>
<body>
    
<!-- header section starts  -->

<?php
include("./view/header.php");
?>

<section class="home" id="home">

    <div class="content">
        <h3>our <span>cake</span>  Product</h3>
    </div>

</section>

<!-- header section ends -->

<!-- products section starts  -->
<form action="koncart.php" method="POST">
<section class="produk" id="produk">

    <h3 class="heading"> our <span>products</span> </h3>
    <?php
        $cart = new cart();
        $kue = $cart->getProduct();
    ?>

    <div class="box-container">
        <div class="box">
            <img src="../img/kue/" alt="">
            <h3></h3>
            <div class="price">Rp.</div>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="" class="btn" name=addcart>shop now</a>
        </div>
        <div class="box">
            <img src="../img/kue/" alt="">
            <h3></h3>
            <div class="price">Rp.</div>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="" class="btn" name=addcart>shop now</a>
        </div>

    </div>
</section>
</form>


<!-- products section ends -->


<!-- footer section starts  -->

<?php 
include("./view/footer.php")
?>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>