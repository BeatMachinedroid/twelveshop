<?php
include("./../connection/koneksi.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start();
 
if( isset($_SESSION['akses']) )
{
    header('location:'.$_SESSION['akses']);
    exit();
}
 
$error = '';
if( isset($_SESSION['error']) ) {
 
    $error = $_SESSION['error']; // set error
 
    unset($_SESSION['error']);
} ?>

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
                    <label>Pilih Kategori</label>
                        <select name="kategori" class="form-control" id="product">
                            <option value="">-- Pilih Kategori --</option>
                            <?php $ssql ="select * from kategori join kue on kategori.idkate=kue.idkate";
													$res=mysqli_query($koneksi, $ssql); 
													while($row=mysqli_fetch_array($res))  
													{
                                                        echo '
                                                        <option value="'.$row['idkate'].'">'.$row['namakate'].'</option>
                                                        
                                                        
                                                        ';
                          
                                                    }
                        ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah kue</label>
                        <input type="email" name="jumlah" class="form-control" placeholder="jumlah yang diinginkan" id="email">
                    </div>
                    <div class="form-group">
                        <label>Pilih Kue</label>
                        <select name="kue" class="form-control" id="product">
                            <option value="">-- Pilih Kue --</option>
                            <?php $ssql ="select * from kue";
													$res=mysqli_query($koneksi, $ssql); 
													while($row=mysqli_fetch_array($res))  
													{
                                                        echo '
                                                        <option value="'.$row['idkue'].'">'.$row['namakue'].'</option>';
                          
                                                    }
                        ?> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Your WhatsApp Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat yang Dituju</label>
                        <textarea name="alamat" class="form-control" rows="3" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success send">Pesan via WhatsApp</button>
                    </div>
 
                    <div id="text-info"></div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
		$(document).on('click','.send', function(){
			/* Inputan Formulir */
			var input_name 			= $("#name").val(),
			    input_email 		= $("#email").val(),
                input_kategori      = $("#kategori").val(),
			    input_jumlah		= $("#jumlah").val(),
			    input_kue		    = $("#kue").val(),
                input_wa            = $("#phone").val(),
			    input_alamat 	    = $("#alamat").val();

			/* Pengaturan Whatsapp */
			var walink 		= 'https://web.whatsapp.com/send',
			    phone 		= '6289643122191',
			    text 		= 'Halo saya ingin memesan :',
			    text_yes	= 'Pesanan Anda berhasil terkirim.',
			    text_no 	= 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if(input_name != "" && input_wa != "" && input_kue != ""  ){
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
				    'Nama : ' + input_name + '%0A' +
				    'Alamat Email : ' + input_email + '%0A' +
                    'Katergori :' + input_kategori + '%0A'+
                    'Jumlah kue :' + input_jumlah + '%0A'
				    'Whatsapp : ' + input_wa + '%0A' +
				    'Nama kue : ' + input_kue + '%0A' +
				    'Alamat : ' + input_alamat + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp,'_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
			}
		});
	</script>
</body>
</html>


<!-- checkout section -->



<!-- checkout section ends-->


<!-- footer section starts  -->

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