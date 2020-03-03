@extends('Customer.masterview')

@section('main')
<div class="inner-banner style-2">
  		<img class="center-image" src="{{ asset('public/images/tour_list/inner_banner_2.jpg')}}" alt="">
	  	<div class="vertical-align">
	  		<div class="container">
	  			<h4 class="color-white">We found: <span>1200</span> hotels</h4>
	  			<h2 class="color-white">Hotel Search Results</h2>
	  		</div>
  		</div>
  	</div>

  	<div class="list-wrapper bg-grey-2">
  		<div class="container">
  			<div class="resoult_search mb-4">
  				<h4>Kết quả tìm kiếm cho </h4>
  			</div>
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3 p-0">
  					<div class="sidebar style-2 clearfix">
  						<div class="map_area" style="background-image: url({{ asset('public//images/tour_list/bigbrain-google-map.png') }})">
  							<p>kết quả Map</p>
  						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Tìm kiếm</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/loc_icon_small_grey.png" alt="">
										<input type="text">
									</div>
								</div>							
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/calendar_icon_grey.png" alt="">
									</div>					
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/calendar_icon_grey.png" alt="">
									</div>					
								</div>
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue hv-dr-blue-o" value="search">				
						</div>
						
						
						<!-- <div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">star rating</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-3">
									<input class="checkbox-form" id="star-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="star-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="star-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="star-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="star-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="star-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="star-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="star-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="star-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="star-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
							</div>											
						</div> -->
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Facility</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Swimming Pool</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Gym / Fitness</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Car Park</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Spa / Sauna</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Airport Transfer</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-6" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-6" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Smoking Area</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="text-7" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-7" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Pet-friendly</span>
									</label>
								</div>																
							</div>											
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Review Score</h4>
							<div class="sidebar-score">
								<div class="input-entry type-2 color-4">
									<input class="checkbox-form" id="score-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-5" >
										<span class="checkbox-text">
											5
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-4">
									<input class="checkbox-form" id="score-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-4" >
										<span class="checkbox-text">
											4
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-4">
									<input class="checkbox-form" id="score-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-3" >
										<span class="checkbox-text">
											3
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-4">
									<input class="checkbox-form" id="score-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-2" >
										<span class="checkbox-text">
											2
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-4">
									<input class="checkbox-form" id="score-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-1" >
										<span class="checkbox-text">
											1
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
							</div>							
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Area</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Earls Court</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Victoria and Westminster</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Bloomsbury - Fitzrovia</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">West End -Soho</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Chelsea - Kensington</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-6" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-6" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Heathrow & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-7" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-7" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Gatwick Airport & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-8" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-8" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Heathrow & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-9" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-9" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">The City</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-10" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="area-10" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Greenwich</span>
									</label>
								</div>									
							</div>											
						</div>											
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by ranking</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-2 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-2 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8"></div>
						</div>
					</div>
  					<div class="list-content clearfix">
  						<div class="list-item-entry">
					        <div class="hotel-item style-8 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="img/tour_list/hotel_grid_1.jpg" alt="">
						          	 	<div class="price price-s-3 red tt">hot price</div>
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          		<div class="hotel-person color-dark-2 list-hidden">from <span>$273</span></div>
					          	        <div class="rate-wrap">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>
						          	    <h4><b>Luxury madrid Hotel</b></h4>                      
							            <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans Défense, Puteaux</span>
							            <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							            <div class="hotel-icons-block grid-hidden">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_1.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_2.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_3.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_4.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_5.png" alt="">
							            </div>
							            <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
							           	<a href="#" class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src="img/loc_icon_small_drak.png" alt="">view on map</a>
						            </div>
						            <div class="title hotel-right bg-dr-blue clearfix cell-view">
						            	<div class="hotel-person color-white">from <span>$703</span></div>
										<a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden" href="#">view more</a>
						            </div>						            
					            </div>
					        </div>						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-8 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="img/tour_list/hotel_grid_2.jpg" alt="">
						          	 	<div class="price price-s-3 red tt">hot price</div>
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          		<div class="hotel-person color-dark-2 list-hidden">from <span>$273</span></div>
					          	        <div class="rate-wrap">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>
						          	    <h4><b>Luxury madrid Hotel</b></h4>                      
							            <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans Défense, Puteaux</span>
							            <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							            <div class="hotel-icons-block grid-hidden">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_1.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_2.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_3.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_4.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_5.png" alt="">
							            </div>
							            <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
							           	<a href="#" class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src="img/loc_icon_small_drak.png" alt="">view on map</a>
						            </div>
						            <div class="title hotel-right bg-dr-blue clearfix cell-view">
						            	<div class="hotel-person color-white">from <span>$703</span></div>
										<a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden" href="#">view more</a>
						            </div>						            
					            </div>
					        </div>						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-8 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="img/tour_list/hotel_grid_3.jpg" alt="">
						          	 	<div class="price price-s-3 red tt">hot price</div>
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          		<div class="hotel-person color-dark-2 list-hidden">from <span>$273</span></div>
					          	        <div class="rate-wrap">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>
						          	    <h4><b>Luxury madrid Hotel</b></h4>                      
							            <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans Défense, Puteaux</span>
							            <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							            <div class="hotel-icons-block grid-hidden">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_1.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_2.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_3.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_4.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_5.png" alt="">
							            </div>
							            <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
							           	<a href="#" class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src="img/loc_icon_small_drak.png" alt="">view on map</a>
						            </div>
						            <div class="title hotel-right bg-dr-blue clearfix cell-view">
						            	<div class="hotel-person color-white">from <span>$703</span></div>
										<a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden" href="#">view more</a>
						            </div>						            
					            </div>
					        </div>						
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-8 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="img/tour_list/hotel_grid_4.jpg" alt="">
						          	 	<div class="price price-s-3 red tt">hot price</div>
						          	</div>
						          	<div class="title hotel-middle clearfix cell-view">
						          		<div class="hotel-person color-dark-2 list-hidden">from <span>$273</span></div>
					          	        <div class="rate-wrap">
						          	        <div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
										    <i>485 rewies</i> 
					                    </div>
						          	    <h4><b>Luxury madrid Hotel</b></h4>                      
							            <span class="f-14 color-dark-2 grid-hidden">2 Place de la Sans Défense, Puteaux</span>
							            <p class="f-14">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
							            <div class="hotel-icons-block grid-hidden">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_1.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_2.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_3.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_4.png" alt="">
							            	<img class="hotel-icon" src="img/tour_list/hotel_icon_5.png" alt="">
							            </div>
							            <a href="#" class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
							           	<a href="#" class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src="img/loc_icon_small_drak.png" alt="">view on map</a>
						            </div>
						            <div class="title hotel-right bg-dr-blue clearfix cell-view">
						            	<div class="hotel-person color-white">from <span>$703</span></div>
										<a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden" href="#">view more</a>
						            </div>						            
					            </div>
					        </div>						
  						</div>
  						
  					</div>

  					<div class="c_pagination clearfix padd-120">
						<a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fl">prev page</a>
						<a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fr">next page</a>
						<ul class="cp_content color-2">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">10</a></li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
@endsection()
