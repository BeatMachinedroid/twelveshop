<header class="header">

    <a href="#" class="logo"> <img class="img-rounded" src="../img/admin/logo.png" alt=""></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="produk.php">produk</a>
        <a href="kategori.php">kategori</a>
        <a href="about.php">tentang</a>
    </nav>


                            
        <div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    <div class="fas fa-search" id="search-btn"></div>
                                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                                    <a href="logout.php"><div class="fas fa-sign-out-alt" id="login-btn"></div></a>
                                </div>

                       

    <form action="cari.php" class="search-form">
        <input name="cari" type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>







    <?php $ambil = $koneksi->query("SELECT * FROM userorder INNER JOIN acoount ON userorder.iduser = acoount.iduser INNER JOIN kue ON userorder.idkue = kue.idkue"); ?>
	<?php while($kue = $ambil->fetch_assoc()){ ?>
    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="../img/kue/<?php echo $kue['gambar']; ?>" alt="">
            <div class="content">
                <h3><?php echo $kue['namakue']; ?></h3>
                <span class="price">Rp. <?php echo $kue['harga']; ?></span>
                <span class="quantity">qty :<?php echo $kue['jumlah']; ?></span>
            </div>
        </div>
        <div class="total"> total : <?php echo $kue['total']; ?></div>
        <a href="checkout.php" class="btn">checkout</a>
    </div><?php } ?>
						


</header>