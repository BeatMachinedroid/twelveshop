

<!doctype html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("./connection/koneksi.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['username']) ||  //fetching and find if its empty 
		empty($_POST['nama']) ||  
		empty($_POST['telp'])||
		empty($_POST['alamat'])||
		empty($_POST['pass']) ||
		empty($_POST['repass']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
		//cheching username & email if already present
	$check_username= mysqli_query($koneksi, "SELECT username FROM acoount where username = '".$_POST['username']."' ");
	$check_nama = mysqli_query($koneksi, "SELECT nama FROM acoount where nama = '".$_POST['nama']."' ");

  if($_POST['pass'] != $_POST['repass']){  //matching passwords
    $message = "Password not match";
}
elseif(strlen($_POST['pass']) < 6)  //cal password length
{
$message = "Password Must be >=6";
}
elseif(strlen($_POST['telp']) < 10)  //cal phone length
{
$message = "invalid phone number!";
}
elseif(mysqli_num_rows($check_username) > 0)  //check username
{
 $message = 'username Already exists!';
}
elseif(mysqli_num_rows($check_nama) > 0) //check email
{
 $message = 'name Already exists!';
}
else{
       
  $password = md5($_POST['pass']);
  //inserting values into db
 $mql = "INSERT INTO acoount(username,nama,telp,alamat,password) VALUES('".$_POST['username']."','".$_POST['nama']."','".$_POST['telp']."','".$_POST['alamat']."','$password')";
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
    <link rel="icon" href="img/admin/logo.png">
    <title>Twelve Kitchen | Register</title>
  </head>
  <body>
  

  <?php


// When form submitted, insert values into the database.


?>

<?php


    // When form submitted, insert values into the database.

    
?>

<div class="d-md-flex half">
    <div class="bg" ></div>
      <div class="container">
      
					  
					   
					
      

          <div class="col-md-12">
            <div class="form-block mx-auto">

              
                        
                    
              <div class="text-center mb-4">  
                <h3>Register Twelve Kitchen</h3>
              </div>
              <span style="color:red;"><?php echo $message; ?></span>
              <span style="color:green;">
                  <?php echo $success; ?>
                      </span>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                <!-- conten -->
                <form action="" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="username">
                </div>
                <div class="form-group first">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="Example-name" id="username" name="nama">
                </div>
                <div class="form-group first">
                  <label for="telp">No. Telphon</label>
                  <input type="text" class="form-control" placeholder="08" id="username" name="telp">
                </div>
                <div class="form-group first">
                        <label>Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" rows="3" id="alamat"></textarea>
                </div>
                <div class="form-group last mb-3">
                  <label >Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="pass">
                  
                  
                        
                </div>
                <div class="form-group last mb-3">
                  <label >Re - Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="repass">
                  
                            
                        
                </div>
                
                <div class="d-sm-flex mb-2 align-items-center">
                  <span class="ml-auto"><a href="login.php" class="forgot-pass">i have acount</a></span> 
                </div>

                <input type="submit" value="Register" name="submit" class="btn btn-block btn-primary">

              </form>
                <!-- end conten -->
              </form>
            </div>
          </div>
        </div>
      </div>
    
  </div>
    
    

    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>

    <?php
        session_destroy();
    ?>
  </body>
</html>

