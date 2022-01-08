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

                                <div class="col-lg-6">
                                    <form role="form" method="post" action="">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="example name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="example@gmail.com" >
                                        </div>
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="08" >
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="datetimepicker1" placeholder="example@gmail.com" >
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hak akses</label>
                                            <input class="form-control" id="datetimepicker1" >
                                        </div>
                                        <button type="submit" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5">Submit Button</button>
                                        <button type="reset" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">Reset Button</button>
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