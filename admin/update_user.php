<?php

session_start();
error_reporting(0);
include('../connection/koneksi.php');

include('./includes/header.php');
include('./includes/slidebar.php');

include('./includes/top.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $password = $_POST['pass'];
    $akses = $_POST['akses'];


    $query = "UPDATE acoount SET '$username' = username , '$nama' = nama , '$telp' = telp , '$alamat' = alamat , '$password' = password '$akses' = akses WHERE iduser = '$_GET[user_upd]'";

    if (mysqli_query($koneksi, $query)) {
        return header("Location:index.php");
    } else {
        echo 'Terjadi kesalahan saat memperbarui data user.';
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
                                    <?php $qml ="select * from acoount where iduser='$_GET[user_upd]'";
													$rest=mysqli_query($koneksi, $qml); 
													$roww=mysqli_fetch_array($rest);
														?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" name="username" value="<?php echo $roww['username'];?>" class="form-control" placeholder="username">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Nama</label>
                                                    <input type="text" name="nama" value="<?php echo $roww['nama'];?>" class="form-control form-control-danger" placeholder="jon">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No. Telphon</label>
                                                    <input type="text" name="telp" value="<?php echo $roww['telp'];?>" class="form-control" placeholder="08">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                    <label class="control-label">Hak Akses</label>
                                                    <input type="text" name="akses" value="<?php echo $roww['akses'];?>" class="form-control form-control-danger" placeholder="jon">
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
                                                    
                                                    <textarea name="address" type="text" style="height:100px;" class="form-control"><?php echo $roww['alamat'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="password" value="<?php echo md5($roww['password']);?>" class="form-control form-control-danger" placeholder="password">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="password" name="repass" value="<?php echo md5($roww['password']);?>" class="form-control form-control-danger" placeholder="password">
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