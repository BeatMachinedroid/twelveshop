<?php
include("./connection/koneksi.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twelve Kitchen | Produk</title>
    <link rel="icon" href="img/admin/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylein.css">

</head>
<body>
    
<!-- header section starts  -->

<?php 
include("./view/header.php")
?>
<section class="home" id="home">

    <div class="content">
        <h3>our <span>cake</span>  Product</h3>
    </div>

</section>
<!-- header section ends -->
<!-- kategori section -->

<!-- products section starts  -->


<?php 
include("./view/inproduk.php")
?>


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