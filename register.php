

<!doctype html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/koneksi.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['username']) ||  //fetching and find if its empty
   	    empty($_POST['nama'])||   
		empty($_POST['telp'])||
        empty($_POST['almt'])||
		empty($_POST['pass'])||
		empty($_POST['repass']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
		//cheching username & email if already present
	$check_username= mysqli_query($koneksi, "SELECT username FROM acoount where username = '".$_POST['username']."' ");
		

	
	if($_POST['pass'] != $_POST['repass']){  //matching passwords
       	$message = "Password not match";
    }
	elseif(strlen($_POST['pass']) < 6)  //cal password length
	{
		$message = "Password harus 6 atau lebih";
	}
	elseif(strlen($_POST['telp']) < 12)  //cal phone length
	{
		$message = "invalid phone number!";
	}
	elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'username Already exists!';
     }
	else{
       
	 //inserting values into db
	$mql = "INSERT INTO acoount(username,nama,telp,alamat,password) VALUES('".$_POST['username']."','".$_POST['nama']."','".$_POST['telp']."','".$_POST['almt']."','".md5($_POST['pass'])."')";
	mysqli_query($koneksi, $mql);
		$success = "Account Created successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('counter');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";
		
		
		
		
		 header("refresh:5;url=login.php"); // redireted once inserted success
    }
	}

}


?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/css/style.css">

    <title>Twelve Kitchen | Register</title>
  </head>
  <body>
  

  <?php


// When form submitted, insert values into the database.


?>

<?php
  include('./view/bodyregister.php');
?>
    
    

    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>
  </body>
</html>

