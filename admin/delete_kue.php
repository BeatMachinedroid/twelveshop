<?php
include("../connection/koneksi.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($koneksi,"DELETE FROM kue WHERE idkue = '".$_GET['kue_del']."'");
header("location:allkue.php");  

?>
