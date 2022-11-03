<?php
include("../connection/koneksi.php");
error_reporting(0);



// sending query
mysqli_query($koneksi,"DELETE FROM kategori WHERE idkate = '".$_GET['kate_del']."'");
header("location:allkate.php");  

?>
