<header class="header">

    <a href="index.php" class="logo"><img class="img-rounded" src="img/admin/logo.png" alt=""></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="produk.php">produk</a>
        <a href="kategori.php">kategori</a>
        
    </nav>

    
						<div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    
                                    <a href="login.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
                                    <a href="login.php"><div class="fas fa-user" id="login-btn"></div></a>
                                </div>
                        

    <form action="" class="search-form" method="post">
        <input type="text" name="cari" id="search-box" placeholder="Cari Kue.... " value="<?php echo $_GET['search'] ?>"> 
        <input type="hidden" name="kat" value="<?php echo $_GET['id'] ?>">
        <label for="search-box" class="fas fa-search" name="carikue"></label>
    </form>
    <?php
        
    ?>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="i" alt="">
            <div class="content">
                <h3></h3>
                <span class="price"></span>
                <span class="quantity"></span>
            </div>
        </div>
        <div class="total"> total : 0</div>
        <a href="#" class="btn">checkout</a>
    </div>
						


</header>