 <?php
//nhúng class Helper để gọi phương thức lấy slug của chi tiết sp
require_once 'helpers/Helper.php';
?>
 <!-- left sidebar start -->
                    <div class="col-md-3 col-sm-12 col-xs-12 text-left">
                        <div class="topbar-left">
                            <aside class="widge-topbar">
                                <div class="bar-title">
                                    <div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
                                    <h2>Shop by</h2>
                                </div>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul class="sidebar-tags">
                                <!--   <?php 
                                  echo "<pre>"; 
                                  print_r($categories);
                                  echo "</pre>";?> -->
                                    <?php if (!empty($categories)): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <?php 
                                                $category_id=$category['id'];
                                                $category_name=$category['name'];
                                                $category_slug=Helper::getSlug($category_name);
                                                $category_link="filter/$category_slug/$category_id";
                                             ?>
                                            <li><a href="<?php echo $category_link ?>"><?php echo $category_name; ?></a><span> (14)</span></li>
                                        <?php endforeach ?>
                                        
                                    <?php else: ?>
                                        <?php echo "ko có danh mục sản phẩm"; ?>
                                    <?php endif ?>
                                    
                                    
                                </ul>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>FILTER BY PRICE</h6>
                                </div>
                                <ul>
                                    <li><a href="filter/price/1">Dưới 100.000đ</a><span> (1)</span></li>
                                    <li><a href="filter/price/2">Từ 100.000đ Đến 200.000đ</a><span> (2)</span></li>
                                    <li><a href="filter/price/3">Từ 200.000đ Đến 400.000đ</a><span> (2)</span></li>
                                    <li><a href="filter/price/4">Từ 400.000đ Đến 600.000đ</a><span> (2)</span></li>
                                    <li><a href="filter/price/5">Trên 600.000đ</a><span> (2)</span></li>
                                </ul>
                            </aside>
                            
                           <!--  <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Size</h6>
                                </div>
                                <ul>
                                    <li><a href="#">S</a><span> (18)</span></li>
                                    <li><a href="#">M</a><span> (24)</span></li>
                                    <li><a href="#">L</a><span> (21)</span></li>
                                </ul>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Color</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Beige</a><span> (1)</span></li>
                                    <li><a href="#">White</a><span> (2)</span></li>
                                    <li><a href="#">Orange</a><span> (2)</span></li>
                                    <li><a href="#">Black</a><span> (2)</span></li>
                                    <li><a href="#">Blue</a><span> (2)</span></li>
                                    <li><a href="#">Green</a><span> (2)</span></li>
                                    <li><a href="#">Yellow</a><span> (2)</span></li>
                                    <li><a href="#">Pink</a><span> (2)</span></li>
                                </ul>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Composition</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Cotton</a><span> (3)</span></li>
                                    <li><a href="#">Polyester</a><span> (9)</span></li>
                                    <li><a href="#">Viscose</a><span> (9)</span></li>
                                </ul>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Styles</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Casual</a><span> (1)</span></li>
                                    <li><a href="#">Dressy</a><span> (2)</span></li>
                                    <li><a href="#">Girly</a><span> (2)</span></li>
                                </ul>
                            </aside>
                            <aside class="sidebar-content">
                                <div class="sidebar-title">
                                    <h6>Properties</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Colorful Dress</a><span> (1)</span></li>
                                    <li><a href="#">Maxi Dress</a><span> (2)</span></li>
                                    <li><a href="#">Midi Dress</a><span> (2)</span></li>
                                    <li><a href="#">Short Dress</a><span> (2)</span></li>
                                    <li><a href="#">Short Sleeve</a><span> (2)</span></li>
                                </ul>
                            </aside>        
                            <aside class="widge-topbar">
                                <div class="bar-title">
                                    <div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
                                    <h2>Popular Tags</h2>
                                </div>
                                <div class="exp-tags">
                                    <div class="tags">
                                        <a href="#">camera</a>
                                        <a href="#">mobile</a>
                                        <a href="#">electronic</a>
                                        <a href="#">destop</a>
                                        <a href="#">tablet</a>
                                        <a href="#">accessories</a>
                                        <a href="#">camcorder</a>
                                        <a href="#">laptop</a>
                                    </div>
                                </div>
                            </aside> -->
                        </div>
                    </div>
                    <!-- left sidebar end -->