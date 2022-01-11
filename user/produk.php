<?php

include("./../connection/koneksi.php");  //include connection file

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
    <link rel="icon" href="img/admin/logo.png">
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

<section class="produk" id="produk">



    <h3 class="heading"> our <span>products</span> </h3>
    <?php 
        if(isset($_GET['idkate'])){
            $idkate = $_GET['idkate'];
        }else{
            die("Error no id select");
        }?>
    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kue ORDER BY idkue DESC"); ?>
	<?php while($kue = $ambil->fetch_assoc()){ ?>
        <div class="box">
            <img src="../img/kue/<?php echo $kue['gambar']; ?>" alt="">
            <h3><?php echo $kue['namakue']; ?></h3>
            <div class="price">Rp.<?php echo $kue['harga']; ?></div>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="produk.php?idkate=<?php $kue['idkate']?>" class="btn">shop now</a>
        </div>

        
        <?php } ?>

    </div>

</section>





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