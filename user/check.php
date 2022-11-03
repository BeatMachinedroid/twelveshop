<?php
    include "../connection/koneksi.php";

    if(empty($_SESSION["nama_user"]))
{
	header('location:login.php');
}
else{
        foreach($_SESSION["cart"] as $cart => $val){
            if (isset($_POST['submit'])) {
            $nama        = $_POST['name'];
            $email       = $_POST['email'];
            $wa          = $_POST['phone'];
            $jumlah      = $val['jumlah'];
            $alamat      = $_POST['alamat'];
                header("location:https://api.whatsapp.com/send?phone=62895705206794&text=Nama:%20$nama%20%0DEmail:%20$email%20%0DNo%20Wa:$wa%20%0DNama%20kue:$kue%20%0DJumlah%20kue:%20$jumlah%20%0DAlamat%20yang%20dituju:$alamat");
            }
            else{
                echo "
                    <script>
                        window.location=history.go(-1);
                    </script>
                ";
            }
    }
    
}

?>