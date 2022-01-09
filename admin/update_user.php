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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ADD USER</h1>
            
        </div>

       <!-- Content Row start-->
       <div class="row">

       <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                            <?php

                                if(isset($_POST['edit_btn']))
                                {
                                    $id = $_POST['edit_id'];
                                    
                                    $query = "SELECT * FROM acoount WHERE iduser='$id' ";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach($query_run as $row)
                                    {
                                        ?>
                                <div class="col-lg-6">
                                    
                                    <?php
                                            }
                                        }
                                    ?>
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