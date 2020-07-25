<?php
//nhúng class Helper để gọi phương thức lấy slug của chi tiết sp
require_once 'helpers/Helper.php';
?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
        <base href="<?php echo $_SERVER['SCRIPT_NAME']; ?>" />
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop List | Lavoro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <!-- Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        
        <!-- CSS  -->
        
        <!-- Bootstrap CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <!-- owl.carousel CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        
        <!-- owl.theme CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/css/owl.theme.css">
            
        <!-- owl.transitions CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        
        <!-- font-awesome.min CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
        <!-- font-icon CSS
        ============================================ -->      
        <link rel="stylesheet" href="assets/fonts/font-icon.css">
        
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        
        <!-- animate CSS
        ============================================ -->         
        <link rel="stylesheet" href="assets/css/animate.css">
        
        <!-- mobile menu CSS
        ============================================ -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        
        <!-- normalize CSS
        ============================================ -->        
        <link rel="stylesheet" href="assets/css/normalize.css">
   
        <!-- main CSS
        ============================================ -->          
        <link rel="stylesheet" href="assets/css/main.css">
        
        <!-- style CSS
        ============================================ -->          
        <link rel="stylesheet" href="assets/style.css">
        
        <!-- responsive CSS
        ============================================ -->          
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="shop">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        <!-- header area start -->
        <header class="short-stor">
            <div class="container-fluid">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-md-3 col-sm-12 text-center nopadding-right">
                        <div class="top-logo">
                            <a href="index.html"><img src="img/logo.gif" alt="" /></a>
                        </div>
                    </div>
                    <!-- logo end -->
                    <!-- mainmenu area start -->
                    <div class="col-md-6 text-center">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li class="expand"><a href="index.php?controller=product&action=index">Home</a>
                                                                  
                                    </li>
                                    <?php foreach ($categories as  $category): ?>
                                    	<?php 
                                                $category_id=$category['id'];
                                                $category_name=$category['name'];
                                                $category_slug=Helper::getSlug($category_name);
                                                $category_link="filter/$category_slug/$category_id";
                                        ?>
                                    	 <li class="expand"><a href="<?php echo $category_link ?>"><?php echo $category['name']; ?></a>
                                                                  
                                    	</li>
                                    <?php endforeach ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu start -->
                        
                        <!-- mobile menu end -->
                    </div>
                    <!-- mainmenu area end -->
                    <!-- top details area start -->
                    <div class="col-md-3 col-sm-12 nopadding-left">
                        <div class="top-detail">
                            <!-- language division start -->
                            <div class="disflow">
                                <div class="expand lang-all disflow">
                                    <a href="#"><img src="assets/img/country/en.gif" alt="">English</a>
                                    <ul class="restrain language">
                                        <li><a href="#"><img src="assets/img/country/it.gif" alt="">italiano</a></li>
                                        <li><a href="#"><img src="assets/img/country/nl_nl.gif" alt="">Nederlands</a></li>
                                        <li><a href="#"><img src="assets/img/country/de_de.gif" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="assets/img/country/en.gif" alt="">English</a></li>
                                    </ul>
                                </div>
                                <div class="expand lang-all disflow">
                                    <a href="#">$ USD</a>
                                    <ul class="restrain language">
                                        <li><a href="#">€ Eur</a></li>
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#">£ GBP</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- language division end -->
                            <!-- addcart top start -->
                            <div class="disflow">
                                <div class="circle-shopping expand">
                                    <div class="shopping-carts text-right">
                                        <div class="cart-toggler">
                                            <a href="gio-hang-cua-ban"><i class="icon-bag"></i></a>
                                            <a href="#"><span class="cart-quantity">2</span></a>
                                        </div>
                                        <div class="restrain small-cart-content">
                                            <ul class="cart-list">
                                                <li>
                                                    <a class="sm-cart-product" href="product-details.html">
                                                        <img src="img/products/sm-products/cart1.jpg" alt="">
                                                    </a>
                                                    <div class="small-cart-detail">
                                                        <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                        <a href="#" class="edit-btn"><img src="img/btn_edit.gif" alt="Edit Button" /></a>
                                                        <a class="small-cart-name" href="product-details.html">Voluptas nulla</a>
                                                        <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="sm-cart-product" href="product-details.html">
                                                        <img src="img/products/sm-products/cart2.jpg" alt="">
                                                    </a>
                                                    <div class="small-cart-detail">
                                                        <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                        <a href="#" class="edit-btn"><img src="img/btn_edit.gif" alt="Edit Button" /></a>
                                                        <a class="small-cart-name" href="product-details.html">Donec ac tempus</a>
                                                        <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="total">Subtotal: <span class="amount">$155.00</span></p>
                                            <p class="buttons">
                                                <a href="checkout.html" class="button">Checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- addcart top start -->
                            <!-- search divition start -->
                            <div class="disflow">
                                <div class="header-search expand">
                                    <div class="search-icon fa fa-search"></div>
                                    <div class="product-search restrain">
                                        <div class="container nopadding-right">
                                            <form action="index.html" id="searchform" method="get">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" maxlength="128" placeholder="Search product...">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- search divition end -->
                            <div class="disflow">
                                <div class="expand dropps-menu">
                                    <a href="#"><i class="fa fa-align-right"></i></a>
                                    <ul class="restrain language">
                                        <li><a href="login.html">My Account</a></li>
                                        <li><a href="wishlist.html">My Wishlist</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="login.html">Log In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- top details area end -->
                </div>
            </div>
        </header>
        <!-- header area end -->