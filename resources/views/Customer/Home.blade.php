@extends('Customer.masterview')

@section('main')


<div class="full-height">
	<div class="clip">
		<div class="bg bg-bg-chrome" style="background-image:url({{ asset('public/images/home_2/main_image.jpg')}})">
		</div>
	</div>
	<div class="vertical-align banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="box_search_hotel">
						<ul class="nav nav-pills p-0" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tìm kiếm khách sạn nơi bạn sẽ đến </a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
							</li>
						-->
					</ul>
					<!-- item motel -->
					<!-- order motel -->
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active px-2" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<form action="" method="POST" id="searchForm">
								<div class="row align-items-center">
									<!-- select where will go -->
									<div class="col-md-12">
										<label for="where">Nơi bạn sẽ đi ?</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend w-100">
												<div class="input-group-text">
													<i class="fas fa-map-marked-alt"></i>
												</div>
												<input type="text" class="form-control" id="where" placeholder="Thành Phố, Khách Sạn, Khu Du Lịch">
											</div>
										</div>
									</div>
									<!-- //////// -->
									<div class="col-md-6 pr-0 box-time">
										<!-- select a day from  -->
										<label for="from">Đi từ ngày :</label>
										<div class="input-group mb-2 booking-calendar">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="far fa-calendar-alt"></i>
												</div>
											</div>
											<div class="from select_time" id="select_time">
												<span></span>
												<span></span>
											</div>
										</div>
										<!-- //////// -->
										<!-- calendar -->
										<div class="box-calendar">
											<div class="calendar">
												<div id="v-cal">
													<div class="vcal-header">
														<div class="vcal-btn" data-calendar-toggle="previous">
															<i class="far fa-arrow-alt-circle-left"></i>
														</div>
														<div class="vcal-header__label" data-calendar-label="month">March 2017</div>
														<div class="vcal-btn" data-calendar-toggle="next">
															<i class="far fa-arrow-alt-circle-right"></i>
														</div>
													</div>
													<div class="vcal-week">
														<span>Mon</span>
														<span>Tue</span>
														<span>Wed</span>
														<span>Thu</span>
														<span>Fri</span>
														<span>Sat</span>
														<span>Sun</span>
													</div>
													<div class="vcal-body" data-calendar-area="month">
													</div>
												</div>
											</div>
										</div>
										<!-- //////// -->
									</div>
									<!-- value night -->
									<div class="col-md-6 box-time">
										<label for="to">Số đêm :</label>
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="far fa-moon"></i>
												</div>
											</div>
											<p class="to select_time d-block ml-2">
												<button type="button" class="minus">-</button>
												<input type="text" value="0" class="number"> Đêm
												<button type="button" class="plus">+</button>
											</p>
										</div>
									</div>
									<!-- //////// -->
									<!-- People/Room -->
									<div class="col-md-12 pr-0">
										<label for="Zoom">Người/Phòng :</label>
										<div class="row m-0">
											<div class="col-md-8 px-0">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fas fa-users"></i>
														</div>
													</div>
													<div class="room_order">
														<p>Trẻ em, người lớn, div..</p>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<button  type="submit" name="send" class="btn btn-success mb-2 w-100">Tìm Kiếm
												</button>
											</div>
										</div>
									</div>
									<!-- //////// -->
								</div>
							</form>
						</div>
							<!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								ok
							</div> -->
						</div>
					</div>  	  
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content -->
<div class="container-fluid">
	<!-- area travel top -->
	<div class="area_travel">
		
		<!-- box area row 1 -->
		<div class="row no-padd top_travel">
			<!-- title area -->
			<div class="title_content">
				<h3>Khu du lịch nổi tiếng</h3>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="item-block">
					<div class="tour-layer delay-1"></div> 
					<div class="vertical-align">
						<h3>Cruise tours</h3>
					</div>
					<img src="{{ asset('public/images/home_2/item_img_1.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="item-block">
					<div class="tour-layer delay-1"></div> 
					<div class="vertical-align">
						<h3>around the world</h3>
					</div>
					<img src="{{ asset('public/images/home_2/item_img_2.jpg')}}" alt="">
				</div>
			</div>
		</div>
		<!-- box area row 2 -->
		<div class="row no-padd">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="item-block style-2">
					<div class="tour-layer delay-1"></div> 
					<div class="vertical-align">
						<h3>dubai</h3>
					</div>
					<img src="{{ asset('public/images/home_2/item_img_3.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="item-block style-2">
					<div class="tour-layer delay-1"></div> 
					<div class="vertical-align">
						<h3>madagascar</h3>
					</div>
					<img src="{{ asset('public/images/home_2/item_img_4.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="item-block style-2">
					<div class="tour-layer delay-1"></div> 
					<div class="vertical-align">
						<h3>monaco</h3>
					</div>
					<img src="{{ asset('public/images/home_2/item_img_5.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- box area row 3 -->
	<div class="row no-padd ">
		<div class="col-md-12 arrows">
			<div class="swiper-container best-slider" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="vertical-align">
							<div class="slide-tour">
								<span>from $960</span>
								<h2>best tours in usa</h2>
								<div class="info-line">
									<div class="info-line-bar">
										<img src="{{ asset('public/images/home_2/tour_icon_1.png')}}" alt="">
										<span>35</span><h5>tours</h5>
									</div>
									<div class="info-line-bar">
										<img src="{{ asset('public/images/home_2/tour_icon_2.png')}}" alt="">
										<span>24</span><h5>cities</h5>
									</div>
									<div class="info-line-bar">
										<img src="{{ asset('public/images/home_2/tour_icon_3.png')}}" alt="">
										<span>90</span><h5>hotels</h5>
									</div>   
								</div>
							</div>   
						</div>
						<div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('public/images/home_2/item_img_6.jpg')}})">
							</div>
						</div>
					</div>
				</div>
				<div class="pagination pagination-hidden poin-style-1"></div>
			</div>
			<div class="arrow-wrapp arr-s-1">
				<div class="cont-1170">
					<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
					<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
				</div>
			</div>
		</div>
	</div>
	<!-- box area row 4 -->
	<div class="row no-padd"> 
		<div class="col-md-4 col-sm-6 col-xs-12">           
			<div class="tour-block tour-block-s-1">
				<div class="tour-layer delay-1"></div> 
				<img src="{{ asset('public/images/home_2/item_img_9.jpg')}}" class="res-img" alt="">
				<div class="tour-caption">
					<div class="vertical-top">
						<a href="#" class="button-s-2 bg-orange fl">save 20%</a>
						<div class="weth-icon fr">
							<img src="{{ asset('public/images/weather_icon_small.png')}}" alt="">
							<b>+30oC</b>
						</div>
					</div>
					<div class="vertical-align">
						<h3>Thailand</h3>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star"></span>
						</div>
						<h4><b>$550</b></h4>  
					</div>
					<div class="vertical-bottom">
						<div class="fl">
							<div class="tour-info">
								<img src="{{ asset('public/images/people_icon.png')}}" alt="">
								<span class="font-style-2"><b>2</b> adults, <b>1</b> kids</span>
							</div>
							<div class="tour-info">
								<img src="{{ asset('public/images/calendar_icon.png')}}" alt="">
								<span class="font-style-2">July<b> 19th</b> to July<b> 26th</b></span>
							</div>
						</div>	
						<a href="#" class="c-button small fr border-white"><span>view more</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">           
			<div class="tour-block tour-block-s-1">
				<div class="tour-layer delay-1"></div> 
				<img src="{{ asset('public/images/home_2/item_img_10.jpg')}}" class="res-img" alt="">
				<div class="tour-caption">
					<div class="vertical-top">
						<a href="#" class="button-s-2 bg-orange fl">save 20%</a>
						<div class="weth-icon fr">
							<img src="{{ asset('public/images/weather_icon_rain.png')}}" alt="">
							<b>+15oC</b>
						</div>
					</div>
					<div class="vertical-align">
						<h3>miami</h3>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star"></span>
						</div>
						<h4><b>$790</b></h4>  
					</div>
					<div class="vertical-bottom">
						<div class="fl">
							<div class="tour-info">
								<img src="{{ asset('public/images/people_icon.png')}}" alt="">
								<span class="font-style-2"><b>2</b> adults, <b>1</b> kids</span>
							</div>
							<div class="tour-info">
								<img src="{{ asset('public/images/calendar_icon.png')}}" alt="">
								<span class="font-style-2">July<b> 19th</b> to July<b> 26th</b></span>
							</div>
						</div>	
						<a href="#" class="c-button small fr border-white"><span>view more</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">           
			<div class="tour-block tour-block-s-1">
				<div class="tour-layer delay-1"></div> 
				<img src="{{ asset('public/images/home_2/item_img_11.jpg')}}" class="res-img" alt="">
				<div class="tour-caption">
					<div class="vertical-top">
						<a href="#" class="button-s-2 bg-orange fl">save 20%</a>
						<div class="weth-icon fr">
							<img src="{{ asset('public/images/weather_icon_small.png')}}" alt="">
							<b>+27C</b>
						</div>
					</div>
					<div class="vertical-align">
						<h3>maldives</h3>
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star"></span>
						</div>
						<h4><b>$895</b></h4>  
					</div>
					<div class="vertical-bottom">
						<div class="fl">
							<div class="tour-info">
								<img src="{{ asset('public/images/people_icon.png')}}" alt="">
								<span class="font-style-2"><b>2</b> adults, <b>1</b> kids</span>
							</div>
							<div class="tour-info">
								<img src="{{ asset('public/images/calendar_icon.png')}}" alt="">
								<span class="font-style-2">July<b> 19th</b> to July<b> 26th</b></span>
							</div>
						</div>	
						<a href="#" class="c-button small fr border-white"><span>view more</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- box area row 5 -->
	<!-- handbook -->
	<div class="row no-padd hand_book position-relative py-5 bg_align" style="background-image: linear-gradient(to right, #000000ba , #000000ba),url({{ asset('public/images/home_2/mot-minh-du-lich.jpg') }})">
		<!-- title area -->
		<div class="title_content">
			<h3>khám phá top địa điểm, cẩm nang du lịch </h3>
		</div>
		<!-- iteam  -->
		<div class="box_iteam mt-5 mx-2">
			<div class="iteam_hand_book bg_align" style="background-image:url({{ asset('public/images/home_2/leo-nui.jpg') }})">
				<p>5 địa điểm leo núi mạo hiểm Việt Nam</p>
			</div>
		</div>
		<div class="box_iteam mt-5 mx-2">
		<div class="iteam_hand_book" style="background-image:url({{ asset('public/images/home_2/handbook_1.jpg') }})">
				<p>Cẩm nang di lịch hè</p>
			</div>
		</div>
		<div class="box_iteam mt-5 mx-2">
			<div class="iteam_hand_book bg_align" style="background-image:url({{ asset('public/images/home_2/52nhung-dia-diem-cho-tre-vui-choi.jpg') }})">
				<p>Khu vui chơi cho trẻ</p>
			</div>
		</div>
	</div>
	<!-- box area row  -->
	<div class="testimonials">
		<div class="row no-padd">
			<div class="col-md-12">
				<div class="clip">
					<div class="bg bg-bg-chrome" style="background-image:url({{ asset('public/images/home_2/item_img_12.jpg')}})">
					</div>
				</div>
				<div class="swiper-container testi-3" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="testi-slider-3">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="testi-wrap">
								<div class="qq">
									<img src="{{ asset('public/images/quote.png')}}" alt="">
								</div>
								<p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
								<h4><b>tomas linderman</b></h4>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testi-wrap">
								<div class="qq">
									<img src="{{ asset('public/images/quote.png')}}" alt="">
								</div>
								<p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
								<h4><b>tomas linderman</b></h4>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="testi-wrap">
								<div class="qq">
									<img src="{{ asset('public/images/quote.png')}}" alt="">
								</div>
								<p>Duis posuere eget purus et euismod. Sed luctus ligula non est fringilla commodo. Nullam faucibus quam sit magna risus, fermentum at varius eu.</p>
								<h4><b>tomas linderman</b></h4>
							</div>
						</div>
					</div>
					<div class="pagination poin-style-1"></div>
				</div>

			</div>
		</div>
	</div> 
</div>

@endsection()
