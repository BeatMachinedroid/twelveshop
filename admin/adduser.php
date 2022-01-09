<?php

include('./includes/header.php');
include('./includes/slidebar.php');
include('../connection/koneksi.php');
include('./includes/top.php');

session_start();
error_reporting(0);

?>             
                   
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form action="code.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Username / email </label>
                        <input type="text" name="username" class="form-control checking_email" placeholder="Enter Username">
                        <small class="error_email" style="color: red;"></small>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="name" name="nama" class="form-control" placeholder="Enter Nama">
                    </div>
                    <div class="form-group">
                        <label>telp</label>
                        <input type="telp" name="telp" class="form-control" placeholder="Enter Number">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="address" name="alamat" class="form-control" placeholder="Enter Number">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addadminprofile">
            Add New User Data 
      </button>
    
        
                        
                       
                        <div class="card">
                            <div class="card-body">
                             
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>No. Telphon</th>
                                                <th>Alamat</th>
                                                <th>Date</th>
                                                <th>Akses</th>												
                                                <th>Action</th>
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * FROM acoount order by iduser desc";
												$query=mysqli_query($koneksi,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="7"><center>No User-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																					

																					echo ' <tr><td>'.$rows['username'].'</td>
																								<td>'.$rows['nama'].'</td>
																								<td>'.$rows['telp'].'</td>
																								<td>'.$rows['alamat'].'</td>
																								<td>'.$rows['date'].'</td>
																								<td>'.$rows['akses'].'</td>																								
																									 <td><a href="delete_user.php?user_del='.$rows['iduser'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash" style="font-size:16px" ></i></a> 
																									 <a href="update_user.php?user_upd='.$rows['iduser'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fas fa-cog"></i></a>
																									</td></tr>';
			
																		}	
														}
											?>                
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
				
       <!-- content row finish -->



<?php

include('./includes/script.php');
include('./includes/footer.php');
?>