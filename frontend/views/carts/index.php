<?php
//nhúng class Helper để gọi phương thức lấy slug của chi tiết sp
require_once 'helpers/Helper.php';
?>

		<section class="content-header">

			<?php if (isset($_SESSION['success'])): ?>
              			<div class="alert alert-success">
                		<?php
                		echo $_SESSION['success'];
               			unset($_SESSION['success']);
                		?>
              			</div>
          	<?php endif ?>
		</section>
		<!-- Shopping Table Container -->
		<div class="cart-area-start">
			<div class="container">
				<!-- Shopping Cart Table -->
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="cart-table">
								<thead>
									<tr>
										<th>Product</th>
										<th>Product name</th>
										<th>Unit Price</th>
										<th>Qty</th>
										<th>Subtotal</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php $sum=0; ?>
									<form action="" method="POST">
										<?php if (isset($_SESSION['cart'])): ?>
										<?php foreach ($_SESSION['cart'] as $product): ?>
										
										<?php 
											$product_slug=Helper::getSlug($product['name']);
											$product_id=$product['id'];
											$product_link="chi-tiet-san-pham/$product_slug/$product_id";

										 ?>

										<tr>
											<td>
												<a href="<?php echo $product_link ?>"><img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" width="140px" height="183px " class="img-responsive" alt=""/></a>
											</td>
											<td>
												<h6><?php echo $product['name'] ?></h6>
											</td>
											
											<td>
												<div class="cart-price"><?php echo $product['price']; ?>đ</div>
											</td>
											<td>
												
													<input type="number" min="0" value="<?php echo $product['quality']?>" name="<?php echo $product['id'] ?>">
												
											</td>
											<td>
												<div class="cart-subtotal"><?php echo $product['price']*$product['quality']  ?></div>
												<?php $sum+=$product['price']*$product['quality'] ?>
											</td>
											<td><a href="index.php?controller=cart&action=delete&id=<?php echo $product_id ?>"><i class="fa fa-times"></i></a></td>
										</tr>
										
									<?php endforeach ?>
									<?php else: ?>
										<h3>Giỏ Hàng Trống</h3>
									<?php endif ?>
									
									<tr>
										<td class="actions-crt" colspan="7">
											<div class="">
												<div class="col-md-4 col-sm-4 col-xs-4 align-left"><a class="cbtn" href="index.php?controller=product&action=index">Continue Shopping</a></div>
												<!-- <div class="col-md-4 col-sm-4 col-xs-4 align-center"><a class="cbtn" href="">UPDATE SHOPPING CART</a></div> -->
												<div class="col-md-4 col-sm-4 col-xs-4 align-center"><input type="submit" name="submit" class="btn btn-primary" value="UPDATE SHOPPING CART"></div>
												<div class="col-md-4 col-sm-4 col-xs-4 align-right"><a class="cbtn" href="index.php?controller=cart&action=clearAll">CLEAR SHOPPING CART</a></div>
											</div>
										</td>
									</tr>
									</form>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Shopping Cart Table -->
				<!-- Shopping Coupon -->
				<div class="row">
					<div class="col-md-12 vendee-clue">
						<!-- Shopping Estimate -->
						<div class="shipping coupon">
							<h5>Grand total:</h5>
							<p><?php echo $sum  ?>đ</p>
							<h5>Estimate Shipping and Tax</h5>
							<p>Enter your destination to get a shipping estimate.</p>
							<form action="" method="POST">
								<!-- <div class="shippingTitle"><p><span>*</span>Country</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Country 1</option>
											<option value="2">Country 2</option>
											<option value="1">Country 3</option>
											<option value="2">Country 4</option>
											<option value="1">Country 5</option>
											<option value="2">Country 6</option>
											<option value="1">Country 7</option>
											<option value="2">Country 8</option>
										</select>
									</div>
								</div>
								
								<div class="shippingTitle"><p>State/Province</p></div>
								<div class="selectOption">
									<div class="selectParent">
										<select>
											<option value="">Please Select</option>
											<option value="1">Region 1</option>
											<option value="2">Region 2</option>
											<option value="1">Region 3</option>
											<option value="2">Region 4</option>
											<option value="1">Region 5</option>
											<option value="2">Region 6</option>
											<option value="1">Region 7</option>
											<option value="2">Region 8</option>
										</select>
									</div>
								</div> -->
								
								<div class="shippingTitle"><p>Họ Tên</p></div>
								<div class="selectOption">
									<input type="text" name="fullname">
								</div>
								<div class="shippingTitle"><p>Địa Chỉ</p></div>
								<div class="selectOption">
									<input type="text" name="address">
								</div>
								<div class="shippingTitle"><p>Email</p></div>
								<div class="selectOption">
									<input type="email" name="email">
								</div>
								<div class="shippingTitle"><p>Số Điện Thoại</p></div>
								<div class="selectOption">
									<input type="number" name="mobile">
								</div>
								<div class="shippingTitle"><p>Note</p></div>
								<div class="selectOption">
									<textarea name="note"></textarea>
								</div>
								<div class="shippingTitle"><p></p></div>
								<input type="submit" name="submit2" value="Thanh Toán"></button>
							</form>
						</div>
						<!-- Shopping Estimate -->
						<!-- Shopping Code -->
						<!-- <div class="shipping coupon hidden-sm">
							<div class=""><h5>Discount Codes</h5></div>
							<p>Enter your coupon code if you have one.</p>
							<form>
								<input type="text" class="coupon-input">
								<button class="pull-left" type="submit">APPLY COUPON</button>
							</form>
						</div> -->
						<!-- Shopping Code -->
						<!-- Shopping Totals -->
						
						<!-- Shopping Totals -->
					</div>
				</div>
				<!-- Shopping Coupon -->
			</div>	
		</div>
		<!-- Shopping Table Container -->