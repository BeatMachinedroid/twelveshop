

<!doctype html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
 // connection



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


    // When form submitted, insert values into the database.

    
?>

<div class="d-md-flex half">
    <div class="bg" ></div>
      <div class="container">
      <?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>

				<?php
				if(isset($_SESSION['message'])) {
				?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['message']?>
				</div>
				<?php
				}
				?>
          <div class="col-md-12">
            <div class="form-block mx-auto">
            
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    
              <div class="text-center mb-4">  
                <h3>Register Twelve Kitchen</h3>
              </div>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                <!-- conten -->
                <form action="kondisireg.php" method="post">
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
                  <label for="almt">Address</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="almt">
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

