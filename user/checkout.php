<?php
include("./../connection/koneksi.php");  //include connection file
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

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
        <h3>our <span>checkout</span>   session</h3>
    </div>

</section>

<!-- home section ends -->



<!-- checkout section -->

<?php
include("./view/checkout.php")
?>

<!-- checkout section ends-->


<!-- footer section starts  -->

<?php 
include("./view/footer.php")
?>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./../js/script.js"></script>

</body>
</html>