<?php
include("./connection/koneksi.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start();
 
if( isset($_SESSION['akses']) )
{
    header('location:'.$_SESSION['akses']);
    exit();
}
 
$error = '';
if( isset($_SESSION['error']) ) {
 
    $error = $_SESSION['error']; // set error
 
    unset($_SESSION['error']);
} ?>

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
                                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                                    <a href="login.php"><div class="fas fa-user" id="login-btn"></div></a>
                                </div>';}
                        else{
                            // if user login
                            echo   '<div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                                    <div class="fas fa-sign-out-alt" id="login-btn"></div>
                                </div>';

                        }?>

    <form action="produk.php" class="search-form" method="post">
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

<!-- header section ends -->

<!-- home section starts  -->

<?php 
include("./view/home.php")
?>

<!-- home section ends -->

<!-- features section starts  -->

<?php 
include("./view/fitur.php")
?>

<!-- features section ends -->

<!-- products section starts  -->

<?php 
include("./view/inproduk.php")
?>

<!-- products section ends -->

<!-- categories section starts  -->

<?php 
include("./view/kategori.php")
?>
<!-- categories section ends -->

<!-- review section starts  -->


<!-- review section ends -->

<!-- blogs section starts  -->

<?php 
include("./view/blog.php")
?>

<!-- blogs section ends -->

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