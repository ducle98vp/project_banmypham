<?php
//nhúng class Helper để gọi phương thức lấy slug của chi tiết sp
require_once 'helpers/Helper.php';
?>
<!-- right sidebar start -->
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <!-- shop toolbar start -->
                        <div class="shop-content-area">
                            <div class="shop-toolbar">
                                <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
                                    <form class="tree-most" method="get">
                                        <div class="orderby-wrapper">
                                            <label>Sort By</label>
                                            <select name="orderby" class="orderby">
                                                <option value="menu_order" selected="selected">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4 col-sm-4 none-xs text-center">
                                    <div class="limiter hidden-xs">
                                        <label>Show</label>
                                        <select>
                                            <option selected="selected" value="">9</option>
                                            <option value="">12</option>
                                            <option value="">24</option>
                                            <option value="">36</option>
                                        </select>
                                        per page        
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
                                    <div class="view-mode">
                                        <label>View on</label>
                                        <ul>
                                            <li class=""><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                            <li class="active"><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop toolbar end -->
                        <!-- product-row start -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="shop-grid-tab">
                                <!-- product-row start -->
                                <div class="row">
                                    <div class="shop-product-tab first-sale">
                                       
                                        <?php if (!empty($products)): ?>
                                            <?php foreach ($products as $product): ?>
                                                <?php 
                                                $summary=substr($product['summary'],0,50)."...";
                                                $product_title=$product['title'];
                                                $product_slug = Helper::getSlug($product_title);
                                                $product_id = $product['id'];
                                                $product_link = "chi-tiet-san-pham/$product_slug/$product_id";
                                                ?>
                                                 
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="two-product">
                                                            <!-- single-product start -->
                                                            <div class="single-product">
                                                        <span class="sale-text">Sale</span>
                                                        <div class="product-img">
                                                            <a href="<?php echo $product_link ?>">
                                                                <img class="primary-image" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                                width="540" height="660" />
                                                                <img class="secondary-image" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                                width="540" height="660" />
                                                            </a>
                                                            <div class="action-zoom">
                                                                <div class="add-to-cart">
                                                                    <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="action-buttons">
                                                                    <div class="add-to-links">
                                                                        <div class="add-to-wishlist">
                                                                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="compare-button">
                                                                            <a href="<?php echo "gio-hang-cua-ban/$product_id" ?>" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                        </div>                                  
                                                                    </div>
                                                                    <div class="quickviewbtn">
                                                                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price"><?php echo $product['price']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="<?php echo $product_link ?>"><?php echo $product['title']; ?></a></h2>
                                                            <p><?php echo $summary; ?></p>
                                                        </div>
                                                            </div>
                                                            <!-- single-product end -->
                                                        </div>
                                                </div>
                                                
                                            <?php endforeach ?>
                                        <?php else: ?>
                                            <h2>Không có sản phẩm tương ứng</h2>
                                        <?php endif ?>
                                    </div>
                                   
                                </div>
                                <!-- product-row end -->
                            </div>
                            <!-- list view -->
                            <div class="tab-pane fade in active" id="shop-list-tab">
                                <div class="list-view">
                                    
                                    <?php if (!empty($products)): ?>
                                        <?php foreach ($products as $product): ?>
                                            <!-- single-product start -->
                                            <?php 
                                                $summary=substr($product['summary'],0,50)."...";
                                                $product_title=$product['title'];
                                                $product_slug = Helper::getSlug($product_title);
                                                $product_id = $product['id'];
                                                $product_link = "chi-tiet-san-pham/$product_slug/$product_id";
                                             ?>
                                            <div class="product-list-wrapper">
                                                <div class="single-product">                                
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <div class="product-img">
                                                            <a href="<?php echo $product_link ?>">
                                                                <img class="primary-image" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                                width="540" height="660" alt="" />
                                                                <img class="secondary-image" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                                                width="540" height="660" alt="" />
                                                            </a>
                                                        </div>                              
                                                    </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="<?php echo $product_link ?>"><?php echo $product['title']; ?></a></h2>
                                                    <div class="rating-price">  
                                                        <div class="pro-rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                        <div class="price-boxes">
                                                            <span class="new-price"><?php echo $product['price'] ?>Đ</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p><?php echo $summary; ?></p>
                                                    </div>
                                                    <div class="actions-e">
                                                        <div class="action-buttons">
                                                            <div class="add-to-cart">
                                                                <a href="<?php echo "gio-hang-cua-ban/$product_id" ?>">Add to cart</a>
                                                            </div>
                                                            <div class="add-to-links">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="compare-button">
                                                                    <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                                </div>                                  
                                                            </div>
                                                        </div>
                                                    </div>                                      
                                                </div>                                  
                                            </div>
                                                </div>
                                            </div>
                                            <!-- single-product end -->  
                                        <?php endforeach ?>
                                    <?php else: ?>
                                        <h2>Không có sản phẩm tương ứng</h2>
                                    <?php endif ?>
                                                   
                                </div>
                            </div>
                            <!-- shop toolbar start -->
                            <div class="shop-content-bottom">
                                <div class="shop-toolbar btn-tlbr">
                                    <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs nopadding-left text-left">
                                        <form class="tree-most" method="get">
                                            <div class="orderby-wrapper">
                                                <label>Sort By</label>
                                                <select name="orderby" class="orderby">
                                                    <option value="menu_order" selected="selected">Default sorting</option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                        <div class="pages">
                                            <label>Page:</label>
                                            <ul>
                                                <li class="current">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
                                        <div class="view-mode">
                                            <label>View on</label>
                                            <ul>
                                                <li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                                <li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop toolbar end -->
                        </div>
                    </div>
                    <!-- right sidebar end -->