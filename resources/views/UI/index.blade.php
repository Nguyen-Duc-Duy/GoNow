@extends('UI.masterview')

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
					<div class="main-title">
						
					</div>
					<div class="box_search_hotel">
							<ul class="nav nav-pills mb-4 p-0" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Khách Sạn</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
								</li>
							</ul>
							<!-- item hotel -->
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<form action="" method="POST">
										<div class="row align-items-center">
											<div class="col-md-12">
												<input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Thành Phố,Khách Sạn,Khu Du Lịch">
											</div>
											<div class="col-md-6 pr-0">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text">@</div>
													</div>
													<input type="date" class="form-control" id="inlineFormInputGroup" placeholder="Từ">
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text">@</div>
													</div>
													<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Đến">
												</div>
											</div>
											<div class="col-md-8 pr-0">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<div class="input-group-text">@</div>
													</div>
													<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Trẻ em,Người lớn,Cặp đôi">
												</div>
											</div>
											<div class="col-md-4">
												<button  type="submit" name="send" class="btn btn-success mb-2 w-100">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									ok
								</div>
								<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">ok</div>
							</div>
						</div>  	  
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row no-padd">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="item-block">
				<div class="tour-layer delay-1"></div> 
				<div class="vertical-align">
					<h3>Cruise tours</h3>
					<p>Nunc cursus libero purus ac congue lorem ipsun arcu cursus ut sed solo nequetiam.</p>
					<a href="#" class="c-button small border-white"><span>view more</span></a>
				</div>
				<img src="{{ asset('public/images/home_2/item_img_1.jpg')}}" alt="">
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="item-block">
				<div class="tour-layer delay-1"></div> 
				<div class="vertical-align">
					<h3>around the world</h3>
					<p>Nunc cursus libero purus ac congue lorem ipsun arcu cursus ut sed solo nequetiam.</p>
					<a href="#" class="c-button small border-white"><span>view more</span></a>
				</div>
				<img src="{{ asset('public/images/home_2/item_img_2.jpg')}}" alt="">
			</div>
		</div>
	</div>
	<div class="row no-padd">
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="item-block style-2">
				<div class="tour-layer delay-1"></div> 
				<div class="vertical-align">
					<div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					</div>
					<h3>dubai</h3>
					<h4>from<b>$600</b></h4>
					<p>Nunc cursus libero purus ac cursus.</p>  
				</div>
				<img src="{{ asset('public/images/home_2/item_img_3.jpg')}}" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="item-block style-2">
				<div class="tour-layer delay-1"></div> 
				<div class="vertical-align">
					<div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					</div>
					<h3>madagascar</h3>
					<h4>from<b>$600</b></h4>
					<p>Nunc cursus libero purus ac cursus.</p>  
				</div>
				<img src="{{ asset('public/images/home_2/item_img_4.jpg')}}" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="item-block style-2">
				<div class="tour-layer delay-1"></div> 
				<div class="vertical-align">
					<div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					</div>
					<h3>monaco</h3>
					<h4>from<b>$600</b></h4>
					<p>Nunc cursus libero purus ac cursus.</p>  
				</div>
				<img src="{{ asset('public/images/home_2/item_img_5.jpg')}}" alt="">
			</div>
		</div>
	</div>
	<div class="row no-padd">
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
	<div class="row no-padd">
		<div class="col-xs-12 col-md-6">
			<div class="video-click">
				<a href="https://player.vimeo.com/video/127669609?color=cd6018&amp;title=0&amp;byline=0&amp;portrait=0" class="video-change"></a>
				<img src="{{ asset('public/images/home_2/item_img_7.jpg')}}" class="img-href res-img" alt="video image">
				<div class="video">  
					<iframe></iframe>
					<img src="{{ asset('public/images/home_2/close.png')}}" alt="close" class="close-v">
				</div>
				<div class="video-title">
					<div class="item-block style-2">
						<div class="play">
							<img src="{{ asset('public/images/home_2/play.png')}}" alt="palay">
						</div>
						<h3>stonehenge</h3>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>  
					</div>
				</div>

			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="swiper-container comm-info-slider" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="testi-slider-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="{{ asset('public/images/home_2/item_img_8.jpg')}}" alt="" class="res-img">
						<div class="vertical-align tm-title">
							<a href="#" class="button-s-2 bg-orange">from $273</a>
							<h3>food tours</h3>
							<div class="comm-info">
								<img src="{{ asset('public/images/home_2/people.png')}}" alt="">
								<div class="comm-info-txt">
									<h5>inna lunoe</h5>
									<p>“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.”</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ asset('public/images/home_2/item_img_8.jpg')}}" alt="" class="res-img">
						<div class="vertical-align tm-title">
							<a href="#" class="button-s-2 bg-orange">from $273</a>
							<h3>food tours</h3>
							<div class="comm-info">
								<img src="{{ asset('public/images/home_2/people.png')}}" alt="">
								<div class="comm-info-txt">
									<h5>inna lunoe</h5>
									<p>“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.”</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="{{ asset('public/images/home_2/item_img_8.jpg')}}" alt="" class="res-img">
						<div class="vertical-align tm-title">
							<a href="#" class="button-s-2 bg-orange">from $273</a>
							<h3>food tours</h3>
							<div class="comm-info">
								<img src="{{ asset('public/images/home_2/people.png')}}" alt="">
								<div class="comm-info-txt">
									<h5>inna lunoe</h5>
									<p>“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.”</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pagination poin-style-1"></div>
			</div>
		</div>
	</div>

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
								<img src="{{ asset('public/imagesg/people_icon.png')}}" alt="">
								<span class="font-style-2"><b>2</b> adults, <b>1</b> kids</span>
							</div>
							<div class="tour-info">
								<img src="{{ asset('public/imagesg/calendar_icon.png')}}" alt="">
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
