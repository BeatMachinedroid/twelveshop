 <?php
    include('../connection/koneksi.php');
    include('./includes/header.php');
    include('./includes/slidebar.php');
    include('./includes/top.php');
 ?>
 
 
 <div class="page-wrapper">
            
 <!-- Start Page Content -->
 <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Registered users</h4>
                             
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>nama</th>
                                                <th>No. Telphone</th>
                                                <th>Alamat</th>
												<th>Address</th>												
												 <th>Reg-Date</th>
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
																									 <a href="update_user.php?user_upd='.$rows['iduser'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fas fa-cog"></i></a></td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						 </div>
 
                      
                            
                        
                <!-- End PAge Content -->
                                                    
<?php
    include('./includes/script.php');
    include('./includes/footer.php');
?>