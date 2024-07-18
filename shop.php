<?php 
include "db.php";
$sel = "SELECT * from prd_details";
if(isset($_POST['add-to-cart'])){
   header("Location:cart.php"); 
}
?>


<?php include "header.php"; ?>

<body>

<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
    <div class="header-section section">
       
        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Header Top Wrapper Start -->
                        <div class="header-top-wrapper">
                            <div class="row">

                                <!-- Header Social -->
                                <div class="header-social col-md-4 col-12">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>

                                <!-- Header Logo -->
                                <div class="header-logo col-md-4 col-12">
                                    <a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
                                </div>

                                <!-- Account Menu -->
                                <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num">2</span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.php"><img src="img/cart/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.php">Holiday Candle</a></h5>
                                                            
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details.php"><img src="img/cart/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details.php">Christmas Tree</a></h5>
                                                            <p>1 x £9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span>£12.00</span></h5>
                                                </div>
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout.php">Check out</a>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Header Top Wrapper End -->

                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Bottom Start -->
        <div class="header-bottom section">
            <div class="container">
                <div class="row">
                   
                    <!-- Header Bottom Wrapper Start -->
                    <div class="header-bottom-wrapper text-center col">

                        <!-- Header Bottom Logo -->
                        <div class="header-bottom-logo">
                            <a href="index.php" class="logo"><img src="img/logo.png" alt="logo"></a>
                        </div>

                        <!-- Main Menu -->
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li><a href="index.php">home</a></li>
                                <li class="active"><a href="shop.php">shop</a>
                                    <ul class="sub-menu">
                                        <li class="active"><a href="shop.php">shop page</a></li>
                                        <li><a href="product-details.php">product details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.php">about</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.php">cart</a></li>
                                        <li><a href="checkout.php">checkout</a></li>
                                        <li><a href="wishlist.php">wishlist</a></li>
										<li><a href="under-construction.php">Under Construction</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">blog page</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                        </nav>

                        <!-- Header Search -->
                        <div class="header-search">
                            
                            <!-- Search Toggle -->
                            <button class="search-toggle"><i class="ion-ios-search-strong"></i></button>
                            
                            <!-- Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu section d-md-none"></div>

                    </div><!-- Header Bottom Wrapper End -->
                    
                </div>
            </div>
        </div><!-- Header Bottom End -->
        
    </div><!-- Header Section End -->
    
       
    <!-- Page Banner Section Start-->
    <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
        <div class="container">
            <div class="row">
                
                <!-- Page Title Start -->
                <div class="page-title text-center col">
                    <h1>shop page</h1>
                </div><!-- Page Title End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End-->
    
       
    <!-- Product Section Start-->
    <div class="product-section section pt-120 pb-120">
        <div class="container">
            
        <div class="row">
                
                <!-- Product Start-->

                <?php

 $sel = "SELECT * FROM prd_details ORDER BY id DESC";
 $q = mysqli_query($con, $sel);
 
                 while($data = mysqli_fetch_assoc($q)){

                 
                ?>
                <div class="col-lg-4 col-md-6 col-12 mb-60">
                   
                    <div class="product">

                        <!-- Image Wrapper -->
                        <div class="image">
                            <!-- Image -->
                            <a href="product-details.php" class="img"><img style="height:   250px;" src="/classes/Dark-Admin/images/<?php echo $data['img']?>" alt="Product"></a>
                            <!-- Wishlist -->
                            <a href="#" class="wishlist"><i class="fa fa-heart-o"></i></a>
                            <!-- Label -->
                            <span class="label">New</span>
                        </div>
                        
                        <!-- Content -->
                        <div class="content">
                            
                            <!-- Head Content -->
                            <div class="head fix">
                               
                                <!-- Title & Category -->
                                <div class="title-category float-left">
                                    <h5 class="title"><a href="product-details.php"><?php echo $data['name']; ?></a></h5>
                                    <a href="shop.php" class="category">Catalog</a>
                                </div>
                                <!-- Price -->
                                <div class="price float-right">
                                    <span class="new"><?php echo $data['price']; ?></span>
                                    <!-- Old Price Mockup If Need -->
                                    <!-- <span class="old">$46</span> -->
                                </div>
                                
                            </div>
                            
                            <!-- Action Button -->
                            <div class="action-button fix">
                                <a href="cart.php" name="add-to-cart">add to cart</a>
                            </div>
                            
                        </div>

                    </div>
                    
                </div><!-- Product End-->
                <?php } ?>
                
                
                
                
                
                
            </div>
            <!-- Product Wrapper End-->
        </div>
    </div><!-- Product Section End-->

       
    <!-- Footer Section Start-->
    <?php include "footer.php"; ?>
    <!-- Footer Section End-->
    

</div><!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>

</html>