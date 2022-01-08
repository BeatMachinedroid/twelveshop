<?php
include("../connection/koneksi.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($koneksi,"DELETE FROM acoount WHERE iduser = '".$_GET['user_del']."'");
header("location:User.php");  

?>
