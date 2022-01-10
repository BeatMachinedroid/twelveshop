<?php

include('./includes/header.php');
include('./includes/slidebar.php');
include('../connection/koneksi.php');
include('./includes/top.php');

session_start();
error_reporting(0);

if(isset($_POST['submit']))           //if upload btn is pressed
{
	
			
		
			
		  
		
		
		if(empty($_POST['kue'])||empty($_POST['deskripsi'])||$_POST['harga']==''||$_POST['kategori']=='')
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
   
								$store = "../img/kue/".basename($fnew);                      // the path to store the upload image
	
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
												
												
												
				                                 
												$sql = "update kue set idkate='$_POST[kategori]',namakue='$_POST[kue]',deskripsi='$_POST[deskripsi]',harga='$_POST[harga]',gambar='$fnew' where idkue='$_GET[kue]'";  // store the submited data ino the database :images
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
        

       <!-- Content Row start-->
       <div class="container-fluid">
                <!-- Start Page Content -->
                  
									
									<?php  echo $error;
									        echo $success; ?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text">update kue</h4>
                            </div>
                            <div class="card-body">
                                <form action='' method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                    <?php $qml ="select * from kue where idkue='$_GET[kue]'";
													$rest=mysqli_query($koneksi, $qml); 
													$roww=mysqli_fetch_array($rest);
														?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Kue</label>
                                                    <input type="text" name="kue" value="<?php echo $roww['namakue'];?>" class="form-control" placeholder="Morzirella">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Deskripsi</label>
                                                    <input type="text" name="deskripsi" value="<?php echo $roww['deskripsi'];?>" class="form-control form-control-danger" placeholder="Deskripsi">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">harga </label>
                                                    <input type="text" name="harga" value="<?php echo $roww['harga'];?>" class="form-control" placeholder="Rp">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="Gambar Kue">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
										
                                            <!--/span-->
                                        <div class="row">
                                            
											
											
											
											
											
											
											 <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Select Category</label>
													<select name="kategori" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option>--Select Category--</option>
                                                 <?php $ssql ="select * from kategori";
													$res=mysqli_query($koneksi, $ssql); 
													while($row=mysqli_fetch_array($res))  
													{
                                                       echo' <option value="'.$row['idkate'].'">'.$row['namakate'].'</option>';;
													}  
                                                 
													?> 
													 </select>
                                                </div>
                                            </div>
											
											
											
                                        </div>
                                     
                                        
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
                <!-- End PAge Content -->
            </div>

       <!-- content row finish -->



<?php

include('./includes/script.php');
include('./includes/footer.php');
?>