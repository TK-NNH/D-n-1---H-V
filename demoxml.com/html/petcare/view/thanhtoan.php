<!-- Page Banner -->
<div class="container-fluid no-padding page-banner">
			<!-- Container -->
			<div class="container">
				<!-- Banner Heading -->
				<div class="banner-heading">
					<h3>Shop - Checkout</h3>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>					
						<li><a href="#">Shop</a></li>					
						<li class="active">Place Order</li>
					</ol>
				</div><!-- Banner Heading /- -->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Checkout Content -->
		<div class="container-fluid no-padding checkout-content">		
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="section-padding"></div>
						<div class="section-title">
							<h3>New User Registeration</h3>
						</div>
						<!-- New User Registeration -->
						<form class="new-user-registeration">
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Your Name</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-id">						
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Email</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="email" class="form-control" id="new-user-email">
								</div>
							</div>
							<div class="form-group">						
								<label class="col-md-4 col-sm-4 col-xs-12">Password</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-pwd">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Re - Type Password</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-re-pwd">
								</div>
							</div>
							<div class="col-md-8 pull-right">
								<button type="submit" class="btn-register">Register</button>
							</div>
						</form><!-- New User Registeration /- -->
					</div>
					<!-- User Login -->
					<div class="col-md-6 user-login">
						<div class="section-padding"></div>
						<div class="section-title">
							<h3>Return User Login</h3>
						</div>
						<form class="new-user-registeration">					
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Your Email*</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="email" class="form-control" id="user-email" required>
								</div>
							</div>
							<div class="form-group">						
								<label class="col-md-4 col-sm-4 col-xs-12">Password*</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="user-pwd" required>
								</div>
							</div>
							<div class="col-md-12 pull-right">
								<a href="#">Forgot Password?</a>
								<button type="submit" class="btn-register btn-sign-in">Sign In</button>
							</div>
						</form>
						<p><span>Or</span></p>
						<a href="#">Purchase As Guest User</a>
					</div><!-- User Login /- -->
					
					<!-- Order Summary -->
					<div class="col-md-12 order-summary">
						<div class="section-padding"></div>
						<!-- Section Header -->
						<div class="section-header">
							<h3>Order Summary</h3>				
						</div><!-- Section Header /- -->
						<div class="order-summary-content">
							<table class="summary_table">
								<thead>
									<tr>
										<th class="product-thumbnail">Product</th>
										<th class="product-name">Product Name</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td data-title="Product" class="product-thumbnail">
											<a title="Product Thumbnail" href="#">
												<img class="attachment-shop_thumbnail wp-post-image" src="images/product/product-1.jpg" alt="thumb-1" />
											</a>					
										</td>
										<td data-title="Product Name" class="product-name">
											<a title="Product Name" href="#">
												White Pet Dog
												<span>Breed   :<span> Maltese</span></span>
												<span>Category  :<span>Companion</span></span>
											</a>
										</td>									
										<td data-title="Quantity" class="product-quantity">
											<div class="quantity">
												<input type="number" />
											</div>
										</td>
										<td data-title="Total" class="product-subtotal">
											<span>£650.00</span>
										</td>									
									</tr>
									<tr class="cart_item">
										<td data-title="Product" class="product-thumbnail">
											<a title="Product Thumbnail" href="#">
												<img class="attachment-shop_thumbnail wp-post-image" src="images/product/product-2.jpg" alt="thumb-1" />
											</a>					
										</td>
										<td data-title="Product Name" class="product-name">
											<a title="Product Name" href="#">
												Hunter Pet Dog
												<span>Breed   :<span> Pit Bull</span></span>
												<span>Category  :<span>Hunter</span></span>
											</a>
										</td>									
										<td data-title="Quantity" class="product-quantity">
											<div class="quantity">
												<input type="number" />
											</div>
										</td>
										<td data-title="Total" class="product-subtotal">
											<span>£480.00</span>
										</td>
									</tr>								
								</tbody>
							</table>
						</div>
						<div class="section-padding"></div>
					</div><!-- Order Summary /- -->
					
					
					
					<!-- Payment Mode -->
					<div class="col-md-5 payment-mode">				
						<div class="section-title">
							<h3>Select Payment Mode</h3>				
						</div>
						<div class="payment-type">
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="db-transfer" value="option1">
								<div class="radio-content">
									<span>Direct Bank Transfer</span>
									<p>Kindly use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
								</div>
							</div>
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="cod" value="option2">
								<div class="radio-content">
									<span>Cash On Delivery</span>
									<p>Limited to Selected Town / City according to the area postal ZIP codes</p>
								</div>
							</div>
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="paypal" value="option3">
								<div class="radio-content">	
									<span>Paypal</span>
									<img src="images/icon/visa-master-card.png" alt="visa-master-card"/>
								</div>
							</div>
						</div>
						<a href="#">Place Order</a>
						<div class="section-padding"></div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Checkout Content /- -->