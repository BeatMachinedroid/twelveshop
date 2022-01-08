<section class="produk" id="produk">

    <h3 class="heading"> our <span>products</span> </h3>

    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kue LIMIT 4"); ?>
	<?php while($kue = $ambil->fetch_assoc()){ ?>
        <div class="box">
            <img src="img/kue/<?php echo $kue['gambar']; ?>" alt="">
            <h3><?php echo $kue['namakue']; ?></h3>
            <div class="price">Rp.<?php echo $kue['harga']; ?></div>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="login.php" class="btn">shop now</a>
        </div>

        
        <?php } ?>

    </div>

</section>