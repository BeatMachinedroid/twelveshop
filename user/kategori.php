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
    <title>Twelve Kitchen | kategori</title>
    <link rel="icon" href="../img/admin/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylein.css">

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
        <h3>our <span>kategory</span>   Product</h3>
    </div>

</section>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kategori"); ?>
	<?php while($kategori = $ambil->fetch_assoc()){ ?>
        <a href="produkk.php?id=<?php echo $kategori['idkate'] ?>">
        <div class="box">
            <img src="../image/<?php echo $kategori['gambark']; ?>" alt="">
            <h3><?php echo $kategori['namakate']; ?></h3>
        </div></a>

        
        <?php } ?>

    </div>

</section>
<!-- categories section ends -->

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