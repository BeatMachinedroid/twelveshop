<?php
    include "../../connection/koneksi.php";

    $id = $_GET['id'] ;


    $sql = "SELECT * FROM kue WHERE idkue LIKE '%".$id."%'";
    $query = mysqli_query($koneksi,$sql);
    $hasil = mysqli_fetch_object($query);
  
    $_SESSION["cart"][$id] = [
        "gambar" => $hasil->gambar,
        "namakue" => $hasil->namakue,
        "deskripsi" => $hasil->deskripsi,
        "harga" => $hasil->harga,
        "jumlah" => 1
        
    ];

    header("location:../cart.php");
?>