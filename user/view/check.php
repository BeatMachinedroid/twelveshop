<?php 
    include "../../connection/koneksi.php";
    
     
        foreach($_SESSION["cart"] as $cart => $val){
            
            $sql = "INSERT INTO `userorder` (idkue,namakue,jumlah,total) VALUES ('".$cart."','".$val["namakue"]."','".$val["jumlah"]."','".$val["jumlah"]*$val["harga"]."')";
            $query = mysqli_query($koneksi,$sql);
        }
        unset($_SESSION["cart"]);
        header("location:../checkout.php")
    
?>