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
    <title>Twelve Kitchen</title>
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

<header class="header">

    <a href="index.php" class="logo"> <img class="img-rounded" src="img/admin/logo.png" alt=""></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="produk.php">produk</a>
        <a href="kategori.php">kategori</a>
        <a href="about.php">tentang</a>
    </nav>

    <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
                            echo   '<div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    <div class="fas fa-search" id="search-btn"></div>
                                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                                    <a href="login.php"><div class="fas fa-user" id="login-btn"></div></a>
                                </div>';}
                        else{
                            // if user login
                            echo   '<div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    <div class="fas fa-search" id="search-btn"></div>
                                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                                    <div class="fas fa-sign-out-alt" id="login-btn"></div>
                                </div>';

                        }?>

    <form action="" class="search-form" method="post">
        <input type="text" name="cari" id="search-box" placeholder="Cari Kue.... ">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    <?php
        
    ?>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="i" alt="">
            <div class="content">
                <h3></h3>
                <span class="price"></span>
                <span class="quantity"></span>
            </div>
        </div>
        <div class="total"> total : 0</div>
        <a href="#" class="btn">checkout</a>
    </div>
						


</header>

<?php 
include("./view/home.php")
?>

<!-- header section ends -->
<!-- kategori section -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kategori"); ?>
	<?php while($kategori = $ambil->fetch_assoc()){ ?>
        <div class="box">
            <img src="image/<?php echo $kategori['gambark']; ?>" alt="">
            <h3><?php echo $kategori['namakate']; ?></h3>
        </div>

        
        <?php } ?>

    </div>

</section>

<!-- products section starts  -->
<section class="produk" id="produk">

    <h3 class="heading"> our <span>products</span> </h3>

    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kue"); ?>
	<?php while($kue = $ambil->fetch_assoc()){ ?>
        <div class="box">
            <img src="img/kue/<?php echo $kue['gambar']; ?>" alt="">
            <h3><?php echo $kue['namakue']; ?></h3>
            <div class="price">Rp.<?php echo $kue['harga']; ?></div>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="app/produk.php" class="btn">shop now</a>
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