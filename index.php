<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duyyy.com</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <?php
    session_start();
    include_once("connection.php");
    ?>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="our-link">
                        <ul>
                        <?php
                        if(!isset($_SESSION['us']) )
                         {
                         }
                         else{
                        ?>
                            <li><a href="?page=update_customer" >
                            <i class="fa fa-id-card" >&nbsp;</i> Account</a></li>
                            <?php }
                        ?>   

                            <?php
                              if(isset($_SESSION['us']) && $_SESSION['us'] != "") {
                            ?>
                                 <li><a style="" href="#">
                                 <i class="fa fa-user-circle" >&nbsp;</i>Hi, <?php echo $_SESSION['us']?></a>
                              </li>
                                 <li><a href="?page=logout" style="">
                                 <i class="fa fa-lock" aria-hidden="trues"></i>Logout</a></li>
                            <?php
                                }
                                 else
                                {
                            ?>
                            <li><a href="?page=login">
                            <i class="fa fa-user-circle">&nbsp;</i>Login</a></li>
                            <li><a href="?page=register" >
                            <i class="fa fa-flag">&nbsp;</i>Register</a></li>
                            <?php
                            }
                            ?>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/ca.jpg" width="100px" height="100px" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">HOME</a></li>
                        <?php
                        if(!isset($_SESSION['admin']) or $_SESSION['admin']==0)
                         {
                         }
                         else{
                        ?>
                        <li class="dropdown megamenu-fw">
                        <a href="#" class="nav-link " data-toggle="dropdown">MANAGEMENT </a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                              <li><a href="?page=category_management">Category</a></li>
                              <li><a href="?page=product_management">Product</a></li>
                              <li><a href="?page=order">Order</a></li>
                        </ul>
                        </li>
                        <?php }
                        ?>
                        <li class="dropdown megamenu-fw">
                        <a href="?page=shop" class="nav-link" data-toggle="dropdown">PRODUCT</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Top</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="?page=shop">Bearbrick</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bottom</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="?page=shop">Bear</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"></span>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <?php
     if(isset($_GET['page']))
     {
         $page = $_GET['page'];
         if($page=="register"){
             include_once("Register.php");
         }
         elseif($page=="login"){
             include_once("Login.php");
         }
         elseif($page=="category_management"){
            include_once("Category_Management.php");
        }
        elseif($page=="product_management"){
            include_once("Product_Management.php");
        }
        elseif($page=="add_category"){
            include_once("Add_Category.php");
        }
        elseif($page=="add_product"){
            include_once("Add_Product.php");
        }
        elseif($page=="update_category"){
            include_once("Update_Category.php");
        }
        elseif($page=="update_product"){
            include_once("Update_Product.php");
        }
        elseif($page=="logout"){
            include_once("Logout.php");
        }
        elseif ($page=="update_customer") {
            include_once("Update_customer.php");
        }
        elseif ($page=="Add to Cart") {
            include_once("Update_Product.php");
        }
        elseif ($page=="product") {
            include_once("product.php");
        }
        elseif ($page=="order") {
            include_once("Management_order.php");
        }
        elseif ($page=="shop") {
            include_once("shop.php");
        }
     }
     else{
         include("Content.php");
     }
    ?>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Duyyy Studio</h4>
                            <p>Duyyy Studio luxury is not outstanding but must be kept in mind. </p>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100074898804268"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/bearbrickbtws//"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100074898804268">About Us</a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=100020672117441">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: 250 Vinh Thuan <br>Vinh Nhuan, <br> Vietnam </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+84-788884871">+84-8888 991</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:duyntgcc19153@fpt.edu.vn">duyntgcc19153@fpt.edu.vn</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#"> Duyyy Studio</a> Design By :
            <a href="https://www.facebook.com/profile.php?id=100074898804268">Duyyy</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>