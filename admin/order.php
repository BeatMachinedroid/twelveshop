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
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    
</div>

 <!-- Start Page Content -->
 <div class="row">
                    <div class="col-12">
                        
                       
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All user Orders</h4>
                             
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Username</th>		
                                                <th>nama kue</th>
                                                <th>Kue</th>
                                                <th>jumlah</th>
                                                <th>harga</th>
												<th>alamat dituju</th>
												<th>total</th>												
												 <th>Date</th>
												  <th>Action</th>
												 
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT acoount.*, userorder.* ,kue.* FROM acoount JOIN userorder ON acoount.iduser=userorder.iduser JOIN kue ON kue.idkue=userorder.idkue ORDER BY odate DESC";
												$query=mysqli_query($koneksi,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="8"><center>No Orders-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																																							
																				
																					echo ' <tr>
																					           <td>'.$rows['username'].'</td>
																								<td>'.$rows['namakue'].'</td>
                                                                                                <td><center><img src="../img/kue/'.$rows['gambar'].'" class="img-responsive  radius" style="max-height:100px;max-width:150px;" /></center></td>
																								<td>'.$rows['jumlah'].'</td>
																								<td>Rp'.$rows['harga'].'</td>
																								<td>'.$rows['alamatdituju'].'</td>
                                                                                                <td>'.$rows['total'].'</td>
                                                                                                <td>'.$rows['odate'].'</td>																							
																									 <td><a href="delete_order.php?order_del='.$rows['idorder'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash" style="font-size:16px"></i></a> 
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