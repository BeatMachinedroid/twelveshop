<?php

session_start();
error_reporting(0);
include('../connection/koneksi.php');

include('./includes/header.php');
include('./includes/slidebar.php');

include('./includes/top.php');

if(isset($_POST['submit'] ))
{
    if(empty($_POST['username']) ||
		empty($_POST['nama']) ||  
		empty($_POST['telp'])||
		empty($_POST['alamat'])||
		empty($_POST['password']))
		{
			$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Required!</strong>
															</div>';
		}
	else
	{
		
	$check_username= mysqli_query($koneksi, "SELECT username FROM acoount where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($koneksi, "SELECT nama FROM acoount where nama = '".$_POST['nama']."' ");

	
	
    if(!filter_var($_POST['nama'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid name!</strong>
															</div>';
    }
	elseif(strlen($_POST['password']) < 6)
	{
		$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Password must be >=6!</strong>
															</div>';
	}
	
	elseif(strlen($_POST['telp']) < 10)
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
	elseif(mysqli_num_rows($check_nama) > 0)
     {
    	$error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>email already exist!</strong>
															</div>';
     }
	else{
       
	
	$mql = "INSERT INTO acoount(username,nama,telp,alamat,password) VALUES('".$_POST['username']."','".$_POST['nama']."','".$_POST['telp']."','".$_POST['alamat']."','".md5($_POST['password'])."')";
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
                <!-- Start Page Content -->
                     <div class="row">
                   
                   
					
					 <div class="container-fluid">
                <!-- Start Page Content -->
                  

																		
                <?php  
									        echo $error;
									        echo $success; ?>
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-Blue">Add Users</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" name="username" class="form-control" placeholder="username">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" name="nama" class="form-control form-control-danger" placeholder="jon">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No. Telphon</label>
                                                    <input type="text" name="telp" class="form-control" placeholder="08">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Hak Akses</label>
                                                    <input type="text" name="akses" class="form-control form-control-danger" placeholder="Admin" disabled>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
										                      
                                            <!--/span-->
                                            <h3 class="box-title m-t-40"> Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    
                                                    <textarea name="address" type="text" style="height:100px;" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="password" class="form-control form-control-danger" placeholder="password">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="password" name="repass" class="form-control form-control-danger" placeholder="password">
                                                    </div>
                                                </div>
                                          </div>
                                            <!--/span-->
                                        
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            



<?php

include('./includes/script.php');
include('./includes/footer.php');
?>