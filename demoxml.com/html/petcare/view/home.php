		<!-- Photo Slider -->
		<div id="photo-slider" class="photo-slider container-fluid no-padding">
			<!-- Main Carousel -->
			<div id="main-slider" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/slider-image/slider-1.jpg" alt="slider-1"/>
						<div class="slider-content">
							<div class="container">
								<div class="slide-content slide-content-1">
									<h2>Chăm sóc chó mèo </h2>
									<h3>Chúng tôi chăm sóc tốt cho<span>Thú cưng đáng yêu của bạn</span></h3>
									<p>Hãy đến với chúng tôi để thú cưng được chăm sóc tốt nhất! <span></span></p>
									<a href="#" class="btn btn-default" title="Purchase">Đặt lịch ngay</a>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="images/slider-image/slider-2.jpg" alt="slider-2"/>
						<div class="slider-content">
							<div class="container">
							<div class="slide-content slide-content-1">
									<h2>Chăm sóc chó mèo </h2>
									<h3>Chúng tôi chăm sóc tốt cho<span>Thú cưng đáng yêu của bạn</span></h3>
									<p style="color:white">Hãy đến với chúng tôi để thú cưng được chăm sóc tốt nhất! <span></span></p>
									<a href="#" class="btn btn-default" title="Purchase">Đặt lịch ngay	</a>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="images/slider-image/slider-3.jpg" alt="slider-3"/>
						<div class="slider-content">
							<div class="container">
							<div class="slide-content slide-content-3">
									<h2>Chăm sóc chó mèo </h2>
									<h3>Chúng tôi chăm sóc tốt cho<span>Thú cưng đáng yêu của bạn</span></h3>
									<p style="color:black">Hãy đến với chúng tôi để thú cưng được chăm sóc tốt nhất! <span></span></p>
									<a href="#" class="btn btn-default" title="Purchase">Đặt lịch ngay	</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Main Carousel /-  -->
		</div><!-- Photo Slider /- -->
		
		<!-- Intro -->
		<div id="intro" class="intro container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>CHÚNG TÔI LÀM GÌ</h3>
					<p></p>
				</div><!-- Section Header /- -->
				<?php
				 
				foreach ($dsdm as $dm) {	
					extract($dm);	
					$hinh = $img_path . $img;

					echo '<div class="col-md-4 col-sm-6">';
					// Hiển thị ảnh của dịch vụ
					echo '<img src="' . $hinh . '" alt="' . $name . '">';   
					echo '<h3>'.$name.'</h3>';
					echo '<p>'.$MoTa.'</p>'; 
					echo '<a href="#" title="Read More">ĐẶT LỊCH NGAY <i class="fa fa-angle-double-right"></i></a>';
					echo '</div>';
				}
                      ?>
				
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Intro /- -->
		
		
		
		<!-- Services -->
		<div id="services" class="services container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>DỊCH VỤ CHÚNG TÔI CUNG CẤP</h3>
					
				</div><!-- Section Header /- -->
				<div class="service-tab col-md-9 no-padding">
					<div class="col-md-4 col-sm-5 no-padding">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-one" href="#tab-one" aria-expanded="true"><i><img src="images/icon/care.png" alt="care"></i>Dịch vụ y tế</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-two" href="#tab-two" aria-expanded="false"><i><img src="images/icon/camp.png" alt="care"></i>Chăm sóc thú y</a>
							</li>
							
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-four" href="#tab-four" aria-expanded="false"><i><img src="images/icon/insurance.png" alt="insurance"></i>Bảo hiểm vật nuôi</a>
							</li>
						</ul>
					</div>
					<div class="tab-content col-md-8 col-sm-7 no-padding">
						<div id="tab-one" class="tab-pane active" role="tabpanel">
							<div class="tab-box">
								<p>Về dịch vụ y tế, chúng tôi có đội ngũ thú y giàu kinh nghiệm, cùng cơ sở vật chất hiện đại để đảm bảo sức khỏe tốt nhất cho thú cưng của bạn. Từ khám sức khỏe định kỳ, tiêm chủng đến phẫu thuật thẩm mỹ hay cấp cứu, chúng tôi luôn sẵn sàng hỗ trợ bạn.</p>
							</div>
						</div>
						<div id="tab-two" class="tab-pane" role="tabpanel">
							<div class="tab-box">
								<p>Đối với dịch vụ chăm sóc thú y, H&V cung cấp các dịch vụ tắm rửa, cắt tỉa lông, cắt móng vuốt cho thú cưng. Chúng tôi cam kết sử dụng các sản phẩm an toàn, lành tính để bảo vệ sức khỏe của thú cưng.</p>
								
							</div>
						</div>
						
						<div id="tab-four" class="tab-pane" role="tabpanel">
							<div class="tab-box">
								<p>Chúng tôi còn cung cấp các gói bảo hiểm vật nuôi với mức phí hợp lý, giúp chủ nhân yên tâm hơn khi nuôi dưỡng thú cưng.</p>
								
							</div>	
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="right-image"><img src="images/services/services.jpg" alt="Service"></div>
			<div class="section-padding"></div>
		</div><!-- Services /- -->
		
		
		
		<div class="why-choose-us container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Tại sao chọn chúng tôi</h3>
					<p></p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images/why-choose/why-choose-1.jpg" alt="why choose" />
							</div>
							<div class="why-choose-hover">
								<i><img src="images/icon/medal.png" alt="medal" /></i>
								<h3>Tốt nhất trong ngành</h3>
								<p>Bác sĩ tài năng và những dịch vụ chăm sóc tốt nhất </p>							
							</div>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images/why-choose/why-choose-1.jpg" alt="why choose" />
							</div>
							<div class="why-choose-hover">
								<i><img src="images/icon/customer-support.png" alt="Customer Support" /></i>
								<h3>Hỗ trợ khách hàng</h3>
								<p>Hỗ trợ khách hàng nhiệt tình và tâm huyết </p>							
							</div>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images/why-choose/why-choose-1.jpg" alt="why choose" />
							</div>
							<div class="why-choose-hover">
								<i><img src="images/icon/home.png" alt="home" /></i>
								<h3>Chăm sóc đặc biệt cho thú cưng</h3>
								<p>Thú cưng của bạn sẽ được chăm sóc đặc biệt bởi đội ngũ chuyên gia </p>							
							</div>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images/why-choose/why-choose-1.jpg" alt="why choose" />
							</div>
							<div class="why-choose-hover">
								<i><img src="images/icon/dogfeek.png" alt="dogfeek" /></i>
								<h3>Cung cấp dịch vụ chất lượng tốt nhất</h3>
								<p>Cung cấp những dịch vụ tốt nhất . Giúp cho bạn cảm thấy an tâm </p>
							</div>
							
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Why Choose Us /- -->
		
		
		<!-- Team -->
		<div class="team container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="section-header">
				<h3>ĐỘI NGŨ CỦA CHÚNG TÔI</h3>
					<p></p>
				</div>
				<div class="row">
					<div class="team-thumb">
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images/team/team-member-1.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images/team/team-member-2.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images/team/team-member-3.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images/team/team-member-4.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Team /- -->
		
		<!-- Counter -->
		<div class="counter container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images/counter/counter-1.png" alt="counter-1"><span class="count" id="statistics_count-1" data-statistics_percent="3540"> &nbsp;</span></h3>
							<p>srvice we done</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images/counter/counter-2.png" alt="counter-2">
							<span class="count" id="statistics_count-2" data-statistics_percent="1234">&nbsp;</span></h3>
							<p>Our Happy Clients</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images/counter/counter-3.png" alt="counter-3">
							<span class="count" id="statistics_count-3" data-statistics_percent="2200">&nbsp;</span></h3>
							<p>Talented Employees</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images/counter/counter-4.png" alt="counter-4">
							<span class="count" id="statistics_count-4" data-statistics_percent="1234">&nbsp;</span></h3>
							<p>Branches We Have</p>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Counter /- -->
		
		
		
		<!-- Offer -->
		<div class="offer container-fluid no-padding">
			<div class="offer-shape">
				<svg width="100%" height="100%">
					<clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
						<polygon points="0 0, 32 100, 100 100, 100 0"></polygon>
					</clipPath>
				</svg>
			</div>
			
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<div class="smart-price">
							<h3>Something Special For Your Pets</h3>
							<h2>In Smart Price</h2>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 pull-right offer-box">					
						<h2>30%</h2><h3>Upto 500 Products<span>On Season Offer Sale</span></h3>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Offer / -->
		
		

		