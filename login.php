<?php
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
 
<?php echo $error;?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" href="img/admin/logo.png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/css/style.css">

    <title>Twelve Kitchen | login</title>
  </head>
  <body>
  

  <?php 
    include('./view/bodylogin.php')
?>
    
    

    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>
  </body>
</html>

