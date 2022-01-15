<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">
	<?php $ambil = $koneksi->query("SELECT * FROM kategori LIMIT 4"); ?>
	<?php while($kategori = $ambil->fetch_assoc()){ ?>
        <a href="produkk.php?id=<?php echo $kategori['idkate'] ?>">
        <div class="box">
            <img src="../image/<?php echo $kategori['gambark']; ?>" alt="">
            <h3><?php echo $kategori['namakate']; ?></h3>
        </div></a>

        
        <?php } ?>

    </div>

</section>