<?php
  include('./connection/koneksi.php');


  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['almt'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];

    

      if($pass === $repass)
      {

        $pass = md5($pass);
        $query = "INSERT INTO acoount (username,nama,telp,alamat,password) VALUES ('$username','$nama','$telp', '$alamat','$password')";
        $runquery = mysqli_query($koneksi , $query);
    
        if($runquery)
        {
          $_SESSION['seksus'] = "user baru telah ditambahkan";
          header('Location: login.php');
        }
        else{
          $_SESSION['status'] = "Your Record not Created";
          header('Location: register.php');
        }
      }
        else{
          $_SESSION['status'] = "password Doesn't match";
          header('Location: register.php');
        }
  }
?>