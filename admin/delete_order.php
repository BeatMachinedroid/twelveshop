<?php
include("../connection/koneksi.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($koneksi,"DELETE FROM userorder WHERE idorder = '".$_GET['order_del']."'");
header("location:all_orders.php");  

?>