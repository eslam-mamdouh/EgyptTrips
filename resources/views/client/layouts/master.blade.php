<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<!-- <link rel="icon" type="image/png" href="/img/favicon.png"> -->
	<title>Egypt Excursions offer tours and excursions in Hurghada, Marsa-Allam   and Sharm El-Shiekh</title>
	<meta name="description"
		content="Egypt Excursions offers tours and excursions throughout Egypt including tours from Hurghada, Aswan, excursions in Alexandria, trips from Cairo and Luxor and Sharm el Sheikh. " />
	<meta name="keywords" content="sharm, sharm el sheikh, excursions, day-trips, cairo, luxor" />
	<meta property="fb:admins" content="100000760416873" />
	<meta property="og:type" content="website" />
	<!-- Bootstrap core CSS -->
	<link href="/inc/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="/inc/css/layout.css" rel="stylesheet">
	<script src="/ajax/libs/jquery/1-11-2/jquery.min.js"></script>
	<script src="/inc/bootstrap/bootstrap.min.js"></script>
	<!-- Other Modules -->
	<link rel="stylesheet" href="/inc/modules/fontawesome/font-awesome-4-3-0/css/font-awesome.min.css">
<style>
    .carousel-inner img{
        height: 450px !important;
        width: 100%
    }
</style>
</head>

<body>
	<nav class="navbar navbar-default navbar-toplinks">
		<div class="container">
			<div class="wbg wbg_top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
						 <i class="fa fa-bars"></i> </button>
					<a href="/booking.html" class="navbar-toggle"><i class="fa fa-shopping-cart"></i></a>
					<a class="navbar-brand" href="/index.html"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/offers">Offers</a></li>
						<li><a href="/reviews">Reviews</a></li>
                        <li><a href="/galleries">Gallary</a></li>
                        <li><a href="/contact">Contact</a></li>
						{{-- <li><a href="/"><i class="fa fa-list-alt"></i> Booking</a></li> --}}
						<!-- <li class="visible-xs visible-sm"><a href="/booking.html"><i class="fa fa-shopping-cart"></i> My Basket</a></li> -->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.wbg -->
		</div> <!-- /.container -->
	</nav><!-- Dessktop Carousel -->
	<div class="site_banner hidden-xs">
		<div class="container">
			<div class="site_banner_hold">
				<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="4000"
					data-pause="hover">
					<div class="carousel-inner" role="listbox">
                        @foreach ($sliders as $slider )
                            @if ($loop->first)

	    					    <div class="item active"><img height="200px" width="100%" src="{{$slider->image}}"
                                    class="img-responsive" /></div>
                            @else
                                <div class="item"><img height="200px" width="100%" src="{{$slider->image}}"
                                    class="img-responsive" /></div>
                            @endif
                        @endforeach
                    </div>

					<a class="left carousel-control" href="/#homeCarousel" role="button" data-slide="prev"><i
							class="fa fa-chevron-left icon-prev"></i></a>
					<a class="right carousel-control" href="/#homeCarousel" role="button" data-slide="next"><i
							class="fa fa-chevron-right icon-next"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Phone Carousel -->
	<div class="site_banner visible-xs-block">
		<div class="container">
			<div class="site_banner_hold">
				<div id="homeCarousel_phone" class="carousel slide" data-ride="carousel" data-interval="4000">
					<div class="carousel-inner" role="listbox">
                        @foreach ($sliders as $slider )
                            @if ($loop->first)

	    					    <div class="item active"><img height="200px" width="100%" src="{{$slider->image}}"
                                    class="img-responsive" /></div>
                            @else
                                <div class="item"><img height="200px" width="100%" src="{{$slider->image}}"
                                    class="img-responsive" /></div>
                            @endif
                        @endforeach
					</div>
					<a class="left carousel-control" href="/#homeCarousel_phone" role="button" data-slide="prev"><i
							class="fa fa-chevron-left icon-prev"></i></a>
					<a class="right carousel-control" href="/#homeCarousel_phone" role="button" data-slide="next"><i
							class="fa fa-chevron-right icon-next"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div id="tour-nav-hold">
		<div id="tour-nav">
			<div class="tour-nav-sale">
				<i class="fa fa-gift"></i> <strong>Sale Now On!</strong> &nbsp; Book 3 Excursions, Get 1 Free +
				Discounts on all Excursions!
				<a href="/booking.html" class="btn btn-xs btn-success">Book Now <span class="badge"
						id="book_btn_badge"></span></a>
			</div>
			<div class="container">
				<!-- Extra components navbar -->
				<div class="navbar  navbar-inverse yamm">
					<div class="navbar-header">
						<button type="button" data-toggle="collapse" data-target="#navbar-collapse-2"
							class="navbar-toggle"><i class="fa fa-bars"></i> Browse Tours</button>
					</div>
					<div id="navbar-collapse-2" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown yamm-fw">
								<a href="/distinations{{$distinations[0]->slug}}" id="cat_4" data-toggle="dropdown" class="dropdown-toggle"><span>Trips from
										{{$distinations[0]->name}}</span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-xs-12 col-sm-3 col-md-3 tour-nav-l">
													<a href="/{{$distinations[0]->slug}}"><img
															src="{{$distinations[0]->image}}"
															class="img-responsive img-rounded" /></a>
													<a href="/{{$distinations[0]->slug}}"
														class="btn btn-primary btn-block">Show all Trips from
														Hurghada</a>
												</div>
												<div class="col-sm-9 col-md-6 tour-nav-m hidden-xs">
													<div class="list-group tour-nav-items">
														<div class="list-group-heading">Trips from Hurghada to Cairo
														</div>
														<a href="/"
															class="list-group-item" data-exc="165" data-cat="4">Cairo 2
															Days Private Tour from Hurghada by A/C Vehicle </a>
														<a href="/"
															class="list-group-item" data-exc="79" data-cat="4">Cairo by
															Plane From Hurghada One Day Trip</a>
														<a href="/index.html" class="list-group-item" data-exc="164"
															data-cat="4">Cairo One Day Tour from Hurghada by A/C Vehicle
														</a>
														<a href="/index.html" class="list-group-item" data-exc="162"
															data-cat="4">Cairo Tour from Hurghada - Overnight Private
															Trip By Plane</a>
														<div class="list-group-heading">Luxor Tours from Hurghada</div>
														<a href="/index.html" class="list-group-item" data-exc="166"
															data-cat="4">Full Day Luxor Tour from Hurghada by Road</a>
														<a href="/index.html" class="list-group-item" data-exc="83"
															data-cat="4">Luxor 2 Days Tour by Road from Hurghada</a>
														<div class="list-group-heading">Adventure Tours in Hurghada
														</div>
														<a href="/index.html" class="list-group-item" data-exc="169"
															data-cat="4">Diving in Hurghada</a>
														<a href="/index.html" class="list-group-item" data-exc="163"
															data-cat="4">Glass Bottom Boat Hurghada</a>
														<a href="/index.html" class="list-group-item" data-exc="170"
															data-cat="4">Hurghada Desert Buggy Safari Trip</a>
														<a href="/index.html" class="list-group-item" data-exc="89"
															data-cat="4">Hurghada Desert Jeep Safari at Sunset</a>
														<a href="/index.html" class="list-group-item" data-exc="90"
															data-cat="4">Hurghada Quad Biking Tour</a>
														<a href="/index.html" class="list-group-item" data-exc="88"
															data-cat="4">Sinbad Simi Submarine Tour from Hurghada</a>
														<div class="list-group-heading">Snorkelling Tours in Hurghada
														</div>
														<a href="/index.html" class="list-group-item" data-exc="84"
															data-cat="4">Snorkeling and Relaxing Trip to Sharm El Naga
															Bay</a>
														<a href="/index.html" class="list-group-item" data-exc="86"
															data-cat="4">Snorkeling Trip to Giftun Island from
															Hurghada</a>
														<a href="/index.html" class="list-group-item" data-exc="173"
															data-cat="4">Snorkelling with Wild Dolphins in Hurghada</a>
														<div class="list-group-heading">Luxor and Cairo Tour from
															Hurghada</div>
														<a href="/index.html" class="list-group-item" data-exc="167"
															data-cat="4">Cairo and Luxor Private Tour from Hurghada by
															Plane</a>
														<div class="list-group-heading">Hurghada Airport Transfers</div>
														<a href="/index.html" class="list-group-item" data-exc="93"
															data-cat="4">Private Airport Transfers in Hurghada </a>
													</div>
												</div>
												<!-- <div class="col-sm-3 tour-nav-r hidden-xs hidden-sm" id="men_cat_4">
													&nbsp;
												</div> -->
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown yamm-fw">
								<a href="/distinations{{$distinations[1]->slug}}" id="cat_1" data-toggle="dropdown" class="dropdown-toggle"><span>Trips from
										{{$distinations[1]->name}} </span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-xs-12 col-sm-3 col-md-3 tour-nav-l">
													<a href="/distinations{{$distinations[1]->slug}}"><img src="{{$distinations[1]->image}}"
															class="img-responsive img-rounded" /></a>
													<a href="/distinations{{$distinations[1]->slug}}" class="btn btn-primary btn-block">Show all
														Trips from {{$distinations[1]->name}} </a>
												</div>
												<div class="col-sm-9 col-md-6 tour-nav-m hidden-xs">
													<div class="list-group tour-nav-items">
														<div class="list-group-heading">Day Trips and Tours in Marsa-Allam
														</div>
														<a href="/index.html" class="list-group-item" data-exc="176"
															data-cat="1">A private Half Day Cairo Tour to the Pyramids
															of Giza & Sphinx</a>
														<a href="/index.html" class="list-group-item" data-exc="62"
															data-cat="1">Cairo Private Tour of Egyptian Museum and the
															Old Town</a>
														<a href="/index.html" class="list-group-item" data-exc="178"
															data-cat="1">Camel Ride at Giza Pyramids Sun Rise Private
															Trip</a>
														<a href="/index.html" class="list-group-item" data-exc="50"
															data-cat="1">Full Day private Trip to Pyramids and Egyptian
															Museum</a>
														<a href="/index.html" class="list-group-item" data-exc="65"
															data-cat="1">Half Day Private Trip To The Pharaonic
															Village</a>
														<a href="/index.html" class="list-group-item" data-exc="172"
															data-cat="1">Historic Cairo Private Tour of Citadel, Coptic
															and Islamic Cairo</a>
														<a href="/index.html" class="list-group-item" data-exc="171"
															data-cat="1">Horse or Camel Ride at the Pyramids of Giza
															Private Tour</a>
														<a href="/index.html" class="list-group-item" data-exc="63"
															data-cat="1">Private Tour to pyramids of Abu Sir , Dahshur &
															Sakkara</a>
														<a href="/index.html" class="list-group-item" data-exc="52"
															data-cat="1">Private Tour to the Great Pyramid of Giza and
															the Ancient Capital of Egypt</a>
														<div class="list-group-heading">Shows and Nile Cruises in Cairo
														</div>
														<a href="/index.html" class="list-group-item" data-exc="66"
															data-cat="1">Cairo Dinner Cruise Down the Nile</a>
														<a href="/index.html" class="list-group-item" data-exc="64"
															data-cat="1">Sound & Light Show at Giza Pyramids</a>
														<div class="list-group-heading">Luxor Tours from Cairo</div>
														<a href="/index.html" class="list-group-item" data-exc="177"
															data-cat="1">2 Days private Tour to Luxor by Plane from
															Cairo</a>
														<a href="/index.html" class="list-group-item" data-exc="71"
															data-cat="1">Luxor by plane from Cairo one day private
															trip</a>
														<div class="list-group-heading">Alexandria Tours from Cairo
														</div>
														<a href="/index.html" class="list-group-item" data-exc="70"
															data-cat="1">Alexandria Full Day Private Tour from Cairo</a>
														<div class="list-group-heading">Cairo Airport Transfers</div>
														<a href="/index.html" class="list-group-item" data-exc="175"
															data-cat="1">Cairo Airport Private Transfers</a>
													</div>
												</div>
												<!-- <div class="col-sm-3 tour-nav-r hidden-xs hidden-sm" id="men_cat_1">
													&nbsp;
												</div> -->
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown yamm-fw">
								<a href="/distinations{{$distinations[2]->slug}}" id="cat_5" data-toggle="dropdown" class="dropdown-toggle"><span>Trips from
										{{$distinations[2]->name}} </span></a>
								<ul class="dropdown-menu">
									<li>
										<div class="yamm-content">
											<div class="row">
												<div class="col-xs-12 col-sm-3 col-md-3 tour-nav-l">
													<a href="/distinations{{$distinations[2]->slug}}"><img src="{{$distinations[2]->image}}"
															class="img-responsive img-rounded" /></a>
													<a href="/distinations{{$distinations[2]->slug}}" class="btn btn-primary btn-block">Show all
														Trips from {{$distinations[2]->name}}</a>
												</div>
												<div class="col-sm-9 col-md-6 tour-nav-m hidden-xs">
													<div class="list-group tour-nav-items"><a href="/index.html"
															class="list-group-item" data-exc="152" data-cat="5">A
															private 2 Days Cairo Tour from Alexadria Port</a><a
															href="/index.html" class="list-group-item" data-exc="156"
															data-cat="5">Cairo One Day Tour from Alexandria </a><a
															href="/index.html" class="list-group-item" data-exc="140"
															data-cat="5">El-Alamein Day Tour from Alexandria Port </a><a
															href="/index.html" class="list-group-item" data-exc="154"
															data-cat="5">Luxor Tour from Alexandria Port</a><a
															href="/index.html" class="list-group-item" data-exc="151"
															data-cat="5">Private 2 Days Tour Cairo & Alexandria from
															Alexandria Port</a><a href="/index.html"
															class="list-group-item" data-exc="155" data-cat="5">Rasheed
															City Tour </a><a href="/index.html" class="list-group-item"
															data-exc="117" data-cat="5">Transfers in Alexandria </a>
													</div>
												</div>
												<!-- <div class="col-sm-3 tour-nav-r hidden-xs hidden-sm" id="men_cat_5">
													&nbsp;
												</div> -->
											</div>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
    
	<div class="container">
		<div class="wbg">
			<div id="save_vert"></div>
			<div class="wbg_r">
				<div class="wbg_inner">
					<div class="row">
    
    
                        @yield('content')
                        @include('client.layouts.rightbar.master')
                        

                    </div>
					<!-- /.row -->
				</div>
				<!-- /.wbg_inner -->
			</div>
			<!-- /.wbg_r -->
		</div>
		<!-- /.wbg -->
	</div>
	<!-- /.container -->
    <div class="container">
		<div class="wbg">
			<!-- <div id="pay_logos_bottom">
				<img src="/booking/img/secure.jpg" class="img-responsive" />
				<div id="footer_copy">Copyright &copy;2019 egyptexcursions.co.uk - All Rights Reserved</div>
			</div> -->
			<div id="footer">
				<div class="row">
					<div class="col-md-4">
						<img src="/img/GYT2.png" class="img-responsive" />
					</div>
					<div class="col-md-4">
						<div class="fb-page" data-href="/https://www.facebook.com/egyptexcursionstour/"
							data-tabs="timeline" data-height="390" data-small-header="false"
							data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			
						</div>
						<div id="fb-root"></div>
						<script>(function (d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "en_US/sdk.js";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
					</div>
					<div class="col-md-4">
						<div class="list">
							<a href="/contact.html" class="list-item">Site contact</a>
							<a href="/special-offers.html" class="list-item">Tour Packages</a>
							<a href="/cancellation-policy.html" class="list-item">Cancellation Policy</a>
						</div>
						<br />
						<a href="/"
							target="_blank" title="DMCA.com Protection Status" class="dmca-badge"> 
							<img
								src="/Badges/DMCA_logo-std-btn180w.png" alt="DMCA.com Protection Status"
								class="img-responsive" /></a>
						<img src="/img/accreditations.png" class="img-responsive" style="margin-top: 10px;" />
					</div>
				</div>
		
			</div>
		</div>
	</div>
	<!-- Add to Basket Modal -->
	<div class="modal fade" id="add_basket_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div id="add_basket_modal_html"></div>
					<div class="row">
						<div class="col-sm-6 xs_margin_bottom"><button type="button"
								class="btn btn-default btn-lg btn-block" data-dismiss="modal">Continue Shopping</button>
						</div>
						<div class="col-sm-6"><a rel="nofollow" href="/booking.html"
								class="btn btn-success btn-lg btn-block"><i class="fa fa-shopping-cart"></i> Book
								Now</a></div>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="/inc/bootstrap/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" src="/inc/menu.js"></script>
	<script src="/inc/sharm-javascript.js"></script>
	<script src="/inc/modules/scrollto/jquery.scrollTo-1.4.3.1-min.js"></script>
	<!-- Google Code for Analytics Tag -->
	<script>
		(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-8221848-1', 'auto');
		ga('send', 'pageview');
	</script>

</body>

</html>