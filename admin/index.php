<?php

include('./includes/header.php');
include('./includes/slidebar.php');
include('./includes/top.php');
include('../connection/koneksi.php');


if( !isset($_SESSION['username']) ){
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: ../login.php');
  }
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                   <!-- Content Row -->
                   <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Kategori</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $sql="select * from Kategori";
												$result=mysqli_query($koneksi,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-archive fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Kue</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $sql="select * from kue";
												$result=mysqli_query($koneksi,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-utensils fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $sql="select * from acoount";
												$result=mysqli_query($koneksi,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Order</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $sql="select * from userorder";
												$result=mysqli_query($koneksi,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->
                    



            

    <?php

include('./includes/script.php');
include('./includes/footer.php');
?>

    


