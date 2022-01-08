<?php
include("../connection/koneksi.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($koneksi,"DELETE FROM kategori WHERE idkate = '".$_GET['kate_del']."'");
header("location:User.php");  

?>
