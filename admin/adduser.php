<?php

include('./includes/header.php');
include('./includes/slidebar.php');
include('../connection/koneksi.php');
include('./includes/top.php');

session_start();
error_reporting(0);

if(isset($_POST['submit'] ))
{
    if(empty($_POST['username']) || 
		empty($_POST['email'])||
		empty($_POST['telp'])||
		empty($_POST['pass']) ||
		empty($_POST['alamat']))
		{
			$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Required!</strong>
															</div>';
		}
	else
	{
		
	$check_username= mysqli_query($koneksi, "SELECT username FROM users where username = '".$_POST['uname']."' ");
	$check_email = mysqli_query($koneksi, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid email!</strong>
															</div>';
    }
	elseif(strlen($_POST['password']) < 6)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Password must be >=6!</strong>
															</div>';
	}
	
	elseif(strlen($_POST['phone']) < 10)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid phone!</strong>
															</div>';
	}
	elseif(mysqli_num_rows($check_username) > 0)
     {
    	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Username already exist!</strong>
															</div>';
     }
	elseif(mysqli_num_rows($check_email) > 0)
     {
    	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>email already exist!</strong>
															</div>';
     }
	else{
       
	
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['uname']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
	mysqli_query($koneksi, $mql);
			$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrass!</strong> New User Added Successfully.</br></div>';
	
    }
	}

}
?>             
                   

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD USER</h1>
            
        </div>

       <!-- Content Row start-->
        <div class="row">

            <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="col-lg-6">
                                    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="example name" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="example@gmail.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="08" name="telp">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3" name="alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hak akses</label>
                                            <input class="form-control" id="datetimepicker1" name="akses">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5" name="submit">Submit Button</button>
                                        <a href="index.php"><button type="reset" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" >Reset Button</button></a>
                                    </form>
                                </div>

                            </div>
                        </div>        
 
            </div>
                <!-- /.col-lg-12 -->
        </div>

       <!-- content row finish -->



<?php

include('./includes/script.php');
include('./includes/footer.php');
?>