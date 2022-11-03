<?php
include("../connection/koneksi.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
?>
 
<?php echo $error;?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Twelve Kichen | Admin</title>
    <link rel="icon" href="./img/logo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">

</head>
<body>
    
<!-- header section starts  -->
<?php

 
if( !isset($_SESSION['saya_admin']) )
{
    header('location:./../'.$_SESSION['hak_akses']);
    exit();
}else{
    $nama = $_SESSION['nama_user'];
}
 
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">