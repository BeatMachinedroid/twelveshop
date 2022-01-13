<?php
include("../connection/koneksi.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
?>

<?php echo $error; //start temp session until logout/browser closed?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/admin/logo.png">
    <title>Twelve Kitchen | Home</title>
    
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
session_start();
 
if( !isset($_SESSION['nama_user']) )
{
    header('location:./../'.$_SESSION['hak_akses']);
    exit();
}else{
    $nama = $_SESSION['nama_user'];
}
 
?>

<!-- header section ends -->

<!-- home section starts  -->

<?php 
include("./view/header.php");


?>

<!-- home section ends -->

<!-- features section starts  -->

<?php 
include("./view/home.php");
include("./view/fitur.php");
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
<script src="../js/script.js"></script>

</body>
</html>