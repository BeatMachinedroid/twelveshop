<?php

include('../connection/koneksi.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $repassword = $_POST['confirmpassword'];
    $alamat = $_POST['edit_pass'];

    if($password === $repassword)
    {   
        $query = "INSERT INTO acoount (username,nama,telp,alamat,password) VALUES ('$username'.'$nama'.'$telp'.'$alamat'.'$password')";
        $query_run = mysqli_query($koneksi, $query);

        if($query_run)
        {
            $_SESSION['success'] = "User baru telah ditambahkan";
            header('Location: adduser.php'); 
        }
        else
        {
            $_SESSION['status'] = "tidak ada User baru yang ditambahkan";
            header('Location: adduser.php');  
        }
    }else{
        $_SESSION['status'] = "password yang dimasukan tidak sama";
            header('Location: adduser.php'); 
    }
}

?>