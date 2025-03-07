<?php
include "db.php";
include "header.php";
$id = $_GET['id'];
if(isset($_POST['qnty'])){
    $qe = $_POST['qtybox'];
    $sel_price = "SELECT * FROM prd_details WHERE id='$id'";
    $price_q = mysqli_query($con, $sel_price);
    $dd_price = mysqli_fetch_assoc($price_q);



    $price = $dd_price['price'];
    echo $price;
    $sel_cart = "SELECT * FROM cart WHERE product_id='$id'";
    $qrry = mysqli_query($con, $sel_cart);
    $dd_qryy = mysqli_fetch_assoc($qrry);
    // $qty_qrry = $dd_qrry['qty']; 
    if($qrry->num_rows>0){
        $upd = "UPDATE cart SET qty='$qe' WHERE product_id='$id'";
        mysqli_query($con, $upd);
    }
    else{
        $ipaddress = getenv("REMOTE_ADDR");
        $ins = "INSERT INTO cart(product_id, qty,price, ip_address) VALUES('$id', '$qe', '$price', '$ipaddress')";
        mysqli_query($con, $ins);
    }
}
?>

<body>

    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="section">


        <!-- Header Section Start -->
         <?php include "header-nav.php"; ?>
        <!-- Header Section End -->


        <!-- Page Banner Section Start-->
        <div class="page-banner-section section" style="background-image: url(img/bg/page-banner.jpg)">
            <div class="container">
                <div class="row">

                    <!-- Page Title Start -->
                    <div class="page-title text-center col">
                        <h1>Product details</h1>
                    </div><!-- Page Title End -->

                </div>
            </div>
        </div><!-- Page Banner Section End-->


        <!-- Product Section Start-->
        <div class="product-section section pt-110 pb-90">
            <div class="container">

                <!-- Product Wrapper Start-->
                <div class="row">
                    <!-- php -->
                     <?php
                     $s = "SELECT * FROM prd_details WHERE id='$id'";
                     $q = mysqli_query($con, $s);
                     $d = mysqli_fetch_assoc($q);
                     $_SESSION['sngl_prd'] = $d['price'];
                     ?>
                    <!-- Product Image & Thumbnail Start -->
                    <div class="col-lg-7 col-12 mb-30">

                        <!-- Product Thumbnail -->
                        <div class="single-product-thumbnail product-thumbnail-slider float-left">
                            <div class="single-thumb"><img src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                            <div class="single-thumb"><img src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        <div class="single-thumb"><img src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        <div class="single-thumb"><img src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        </div>

                        <!-- Product Image -->
                        <div class="single-product-image product-image-slider fix">
                            <div class="single-image"><img style="height: 330px; width:450px;" src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                            <div class="single-image"><img style="height: 330px; width:450px;" src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        <div class="single-image"><img style="height: 330px; width:450px;" src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        <div class="single-image"><img style="height: 330px; width:450px;" src="/classes/Dark-Admin/images/<?php echo $d['img']?>" alt=""></div>
                        </div>

                    </div><!-- Product Image & Thumbnail End -->
                    <!-- Product Content Start -->
                    <div class="single-product-content col-lg-5 col-12 mb-30">

                        <!-- Title -->
                        <h1 class="title"><?php echo $d['name']; ?></h1>

                        <!-- Product Rating -->
                        <span class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>

                        <!-- Price -->
                        <span class="product-price"><?php echo $d['price']; ?></span>

                        <!-- Description -->
                        <div class="description">
                            <p><?php echo $d['dsp']; ?></p>
                        </div>

                        <!-- Color -->
                        <div class="product-color fix">
                            <h5>Select Color</h5>
                            <form action="#">
                                <div class="color-box"><input type="radio" name="color" id="color-1"><label
                                        for="color-1" style="background-color: #51bd99;">color 1</label></div>
                                <div class="color-box"><input type="radio" name="color" id="color-2"><label
                                        for="color-2" style="background-color: #83a931;">color 2</label></div>
                                <div class="color-box"><input type="radio" name="color" id="color-3"><label
                                        for="color-3" style="background-color: #c8001e;">color 3</label></div>
                                <div class="color-box"><input type="radio" name="color" id="color-4"><label
                                        for="color-4" style="background-color: #414141;">color 4</label></div>
                            </form>
                        </div>

                        <!-- Quantity & Cart Button -->
                        <div class="product-quantity-cart fix">
                            <form action="" method="POST">
                            <div class="product-quantity">
                                <?php
                                $sel_cart1 = "SELECT * FROM cart WHERE product_id='$id'";
                                $sel_q = mysqli_query($con, $sel_cart1);
                                $cart_d = mysqli_fetch_assoc($sel_q);
                                ?>
                                <input type="text" value="<?php echo $dd_qryy['qty']; ?>" name="qtybox">
                            </div>
                            <button class="add-to-cart" name="qnty">add to cart</button>
                            </form>
                        </div>

                        <!-- Action Button -->
                        <div class="product-action-button fix">
                            <button><i class="ion-ios-email-outline"></i>Email to a friend</button>
                            <button><i class="ion-ios-heart-outline"></i>Wishlist</button>
                            <button><i class="ion-ios-printer-outline"></i>Print</button>
                        </div>

                        <!-- Social Share -->
                        <div class="product-share fix">
                            <h6>Share :</h6>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>

                    </div>Product Content End

                </div><!-- Product Wrapper End-->

                <!-- Product Additional Info Start-->
                <div class="row">

                    <!-- Nav tabs -->
                    <div class="col-12 mt-30">
                        <ul class="pro-info-tab-list nav">
                            <li><a class="active" data-toggle="tab" href="#more-info">More info</a></li>
                            <li><a data-toggle="tab" href="#data-sheet">Data sheet</a></li>
                            <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content col-12">

                        <div class="pro-info-tab tab-pane active" id="more-info">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine
                                designs delivering stylish separates and statement dresses which have since evolved into
                                a full ready-to-wear collection in which every item is a vital part of a woman's
                                wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable
                                signature style. All the beautiful pieces are made in Italy and manufactured with the
                                greatest attention.</p>
                        </div>

                        <div class="pro-info-tab tab-pane" id="data-sheet">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="pro-info-tab tab-pane" id="reviews">
                            <a class="button" href="#">Be the first to write your review!</a>
                        </div>

                    </div>

                </div><!-- Product Additional Info End-->

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