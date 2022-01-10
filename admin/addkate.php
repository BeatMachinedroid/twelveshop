<?php

include('./includes/header.php');
include('./includes/slidebar.php');
include('../connection/koneksi.php');
include('./includes/top.php');

session_start();
error_reporting(0);

if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			
		
			
		  
		
		
		if(empty($_POST['nama']))
		{	
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Must be Fillup!</strong>
															</div>';
									
		
								
		}
	else
		{
		
				$fname = $_FILES['file']['name'];
								$temp = $_FILES['file']['tmp_name'];
								$fsize = $_FILES['file']['size'];
								$extension = explode('.',$fname);
								$extension = strtolower(end($extension));  
								$fnew = uniqid().'.'.$extension;
   
								$store = "../image/".basename($fnew);                      // the path to store the upload image
	
					if($extension == 'jpg'||$extension == 'png'||$extension == 'gif'||$extension == 'jpeg' )
					{        
									if($fsize>=1000000)
										{
		
		
												$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Max Image Size is 1024kb!</strong> Try different Image.
															</div>';
	   
										}
		
									else
										{
												
												
												
				                                 
												$sql = "INSERT INTO kategori(namakate,gambark) VALUE('".$_POST['nama']."','".$fnew."')";  // store the submited data ino the database :images
												mysqli_query($koneksi, $sql); 
												move_uploaded_file($temp, $store);
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Congrass!</strong> New Dish Added Successfully.
															</div>';
                
	
										}
					}
					        elseif($extension == '')
					{
						$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>select image</strong>
															</div>';
					}
					else{
					
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid extension!</strong>png, jpg, Gif are accepted.
															</div>';
						
	   
						}               
	   
	   
	   }



	
	
	

}

?>             
                   

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <?php  echo $error;
									        echo $success; ?>

       <!-- Content Row start-->
       <div class="row">

       <div class="col-lg-12">

       <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text">Add kategori</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
                                        
                                            <div class="col-md-20">
                                                <div class="form-group">
                                                    <label class="control-label">kategori Name</label>
                                                    <input type="text" name="nama" class="form-control" placeholder="pizza">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        
                                        <!--/row-->
										
											<div class="col-md-20">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    </div>
                                            </div>
                                            <!--/span-->
											
											
											
											 
                                        
											
											
											
                                        </div>
                                        <!--/row-->
                                        
                                      
                                            <!--/span-->
                                        
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>            
 
                </div>
                <!-- /.col-lg-12 -->
            </div>

       <!-- content row finish -->



<?php

include('./includes/script.php');
include('./includes/footer.php');
?>