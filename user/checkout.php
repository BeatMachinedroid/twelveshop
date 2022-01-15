<?php  //include connection file
include('./../connection/koneksi.php');
error_reporting(0);  // using to hide undefine undex errors
session_start();
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twelve Kitchen | Checkout</title>
    <link rel="icon" href="img/admin/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/stylein.css">


</head>
<body>
    
<!-- header section starts  -->

<?php 
include("./view/header.php")
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>our <span>checkout</span>   session</h3>
    </div>

</section>

<!-- home section ends -->
<form action="check.php" method="post">
<div class="container">
        <div class="col-lg-6 col-lg-offset-3">
            
            <div class="panel panel-success">
                <div class="panel-heading">
                    Checkout Ke WhatsApp
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" id="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Your WhatsApp Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
                    </div>
                    <div class="form-group">
                    <label>Pilih kue</label>
                        <select name="kue" class="form-control" id="kategori">
                    <?php
	 			$_GET['id'] != '';
                
	 			
	 				
	 				
               $ambil = $koneksi->query("SELECT * FROM kue WHERE idkue LIKE '%".$_GET['id']."%' ORDER BY idkue DESC"); 
                while($kue = $ambil->fetch_assoc()){

	 			?>
                    
                            <option><?php echo $kue['namakue']; ?></option>
 
                        

                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <label>Jumlah kue</label>
                        <input type="text" name="jumlah" value="1" class="form-control" placeholder="jumlah yang diinginkan" id="jumlah">
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Alamat yang Dituju</label>
                        <textarea name="alamat" class="form-control" rows="3" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success send" name="submit">Pesan via WhatsApp</button>
                    </div>
 
                    <div id="text-info"></div>
                </div>
            </div>
            </div>
        </div></div>
        </div>
</div>
</form>



<?php 
include("./view/sript.php");
include("./view/footer.php");
?>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./../js/script.js"></script>

</body>
</html>