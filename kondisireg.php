<?php
    include('./connection/koneksi.php');
    

    if (isset($_POST['regis'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($koneksi, $_POST['username']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $password_1 = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $password_2 = mysqli_real_escape_string($koneksi, $_POST['pass2']);
      
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($nama)) { array_push($errors, "name is required"); }
        if (empty($telp)) {array_push($errors, "telphon numbers is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
          array_push($errors, "The two passwords do not match");
        }
      
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM acoount WHERE username / email='$username' LIMIT 1";
        $result = mysqli_query($koneksi, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { // if user exists
          if ($user['username / email'] === $username) {
            array_push($errors, "Username already exists");
          }
        }
      
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
      
            $query = "INSERT INTO acooount (username / email, nama, telp, password, alamat, akses) 
                      VALUES('$username', '$nama','$telp', '$password', '$alamat' ,'user')";
            mysqli_query($db, $query);
            header('location: login.php');
        }
      }
?>