
        <?php require_once 'views/layouts/header.php' ?>
        <!-- category-banner area start -->
        <div class="category-banner">
            <div class="cat-heading">
                <span>Women</span>
            </div>
        </div>
        <!-- category-banner area end -->
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-inner">
                            <ul>
                                <li class="home">
                                    <a href="index.html">Home</a>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </li>
                                <li class="category3"><span>Shop List</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <!-- shop-with-sidebar Start -->
        <div class="shop-with-sidebar">
            <div class="container">
                <div class="row">
                   
                   <?php 
                        switch ($_GET['controller']) {
                            case 'cart':
                                # code...
                                break;
                            
                            default:
                                require_once'views/products/filter.php';
                                break;
                        }
                    ?>
                    <?php echo $this->content; ?>
                </div>
            </div>
        </div>
        <!-- shop-with-sidebar end -->
       <?php require_once 'views/layouts/footer.php' ?>