<header class="header">

    <a href="index.php" class="logo"> <img class="img-rounded" src="../img/admin/logo.png" alt=""></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="produk.php">produk</a>
        <a href="kategori.php">kategori</a>
        
    </nav>


                            
        <div class="icons">
                                    <div class="fas fa-bars" id="menu-btn"></div>
                                    <?php
                                        if(empty($_SESSION["user_id"])) // if user is not login
                                            {
                                            echo   '<div class="fas fa-search" id="search-btn"></div>';}
                                        else{
                                            // if user login
                                            echo   '
                                                    <div class="fas fa-search" id="search-btn"></div>
                                                    ';

                                    }?>
                                    <a href="checkout.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
                                    <a href="logout.php"><div class="fas fa-sign-out-alt" id="login-btn"></div></a>
                                </div>

                       
                                <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>







    
						


</header>