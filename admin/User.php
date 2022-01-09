 <?php
    include('../connection/koneksi.php');
    include('./includes/header.php');
    include('./includes/slidebar.php');
    include('./includes/top.php');
 ?>
 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
                        
                    </div>  
                    
 <!-- Start Page Content -->
 <div class="row">
                    <div class="col-12">
                        
                       
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
					</div>
                      
</div>
                        
                <!-- End PAge Content -->
                                                    
<?php
    include('./includes/script.php');
    include('./includes/footer.php');
?>