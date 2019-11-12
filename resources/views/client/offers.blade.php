@extends('client.layouts.master')
@section('content')

<div class="col-md-9">
<!-- /.main col -->             
<h1>Special Offers</h1>
<ul class="breadcrumb">
    <li><a href="index.html" id="home">Home</a></li>
    <li class="active">Special Offers on Excursions and Tours</li>
</ul>

@foreach ($offers as $offer)
	<h2 class="page-header">{{$offer->title}}</h2>
	<p>{!! $offer->description !!}</p>
	<hr class="break" />
@endforeach
<h4 class="page-header">What Tours Can We Chose for Free?</h4>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#thome" aria-controls="thome" role="tab" data-toggle="tab">
        Free Trips from Hurghada</a></li>
  
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
            Trips from Marsa-Allam</a></li>
    <li role="presentation"><a href="#tsharm" aria-controls="tsharm" role="tab" data-toggle="tab">
        Free Trips from Sharm El Sheikh</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content" style="padding-top: 15px;">
    <div role="tabpanel" class="tab-pane active" id="thome">
<div class="catHolder"><div class="row">
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="pp">&nbsp;</div>
			<div class="exbox-img-hold">
				<a href="glass-bottom-boat-hurghada-excursion"><img src="systemimages/glass-bottom-boat-trip-hurghada.jpg" class="exbox-img" alt="Glass Bottom Boat Hurghada" /></a>
				<span class="changeAddAjax"><span id="change_add_163"><a rel="nofollow" href="javascript: addToEnquireList('add',163)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="glass-bottom-boat-hurghada-excursion">Glass Bottom Boat Hurghada</a>
				<div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">Pick you up from your hotel in Hurghada to Explore the beautiful Red Sea that surrounds Hurghada and lookout for dolphins, rays, turtles and plenty of...</p>
                <div class="fprice">&pound;19</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="pp10">&nbsp;</div>
			<div class="exbox-img-hold">
				<a href="hurghada-safari-quadbiking-excursion"><img src="systemimages/hurghada-quad-bike-safari.jpg" class="exbox-img" alt="Hurghada Quad Biking Tour" /></a>
				<span class="changeAddAjax"><span id="change_add_90"><a rel="nofollow" href="javascript: addToEnquireList('add',90)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="hurghada-safari-quadbiking-excursion">Hurghada Quad Biking Tour</a>
				<div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <p class="s">Experience the beautiful desert of Hurghada on our Hurghada quad biking experience. What better way to see the stunning deserts than whilst racing acr...</p>
                <div class="fprice">&pound;20</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="pp10">&nbsp;</div>
			<div class="exbox-img-hold">
				<a href="hurghada-private-transfer-airport-hotel-excursion"><img src="systemimages/transfer.jpg" class="exbox-img" alt="Private Airport Transfers in Hurghada " /></a>
				<span class="changeAddAjax"><span id="change_add_93"><a rel="nofollow" href="javascript: addToEnquireList('add',93)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="hurghada-private-transfer-airport-hotel-excursion">Private Airport Transfers in Hurghada </a>
				<div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <p class="s">Meet and assist upon arrival at Hurghada airport by our friendly staff. Book a private airport transfer in Hurghada for just £4 per person and start ...</p>
                <div class="fprice">&pound;7</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="pp10">&nbsp;</div>
			<div class="exbox-img-hold">
				<a href="hurghada-snorkeling-giftun-island-excursion"><img src="systemimages/snorkelling-giftun-island-tour.jpg" class="exbox-img" alt="Snorkeling Trip to Giftun Island from Hurghada" /></a>
				<span class="changeAddAjax"><span id="change_add_86"><a rel="nofollow" href="javascript: addToEnquireList('add',86)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="hurghada-snorkeling-giftun-island-excursion">Snorkeling Trip to Giftun Island from Hurghada</a>
				<div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                <p class="s">Snorkel amongst beautiful coral reefs, and swim with the dolphins at Giftun Island National Park. We'll stop at the best snorkelling spots on the way ...</p>
                <div class="fprice">&pound;23</div>
            </div>
            </div></div></div></div></div>
<div role="tabpanel" class="tab-pane" id="profile">
<div class="catHolder"><div class="row">
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="pp">&nbsp;</div>
			<div class="exbox-img-hold">
				<a href="cairo-airport-hotel-transfer-excursion"><img src="systemimages/transfer.jpg" class="exbox-img" alt="Cairo Airport Private Transfers" /></a>
				<span class="changeAddAjax"><span id="change_add_175"><a rel="nofollow" href="javascript: addToEnquireList('add',175)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="cairo-airport-hotel-transfer-excursion">Cairo Airport Private Transfers</a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">Take the hassle out of your journey from Cairo airport to your hotel with our fantastic Cairo Airport transfer service. Book today and a private mini-...</p>
                <div class="fprice">&pound;7</div>
            </div>
            </div></div></div></div></div>
<div role="tabpanel" class="tab-pane" id="messages">
<div class="catHolder"><div class="row">
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="luxor-airport-transfer-excursion"><img src="systemimages/transfer.jpg" class="exbox-img" alt="Private Transfer from Luxor Airport " /></a>
				<span class="changeAddAjax"><span id="change_add_61"><a rel="nofollow" href="javascript: addToEnquireList('add',61)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="luxor-airport-transfer-excursion">Private Transfer from Luxor Airport </a>
				<div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <p class="s">Warmest welcome upon arrival to Luxor airport, smoothing and speeding up all arrival procedures to protect you from being hassled or confused at any p...</p>
                <div class="fprice">&pound;7</div>
            </div>
            </div></div></div></div></div>
<div role="tabpanel" class="tab-pane" id="tsharm">
<div class="catHolder"><div class="row">
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="belly-dance-sound-light-show-excursion"><img src="systemimages/1001-night-show-sharm.jpg" class="exbox-img" alt="1001 Night Show in Sharm" /></a>
				<span class="changeAddAjax"><span id="change_add_130"><a rel="nofollow" href="javascript: addToEnquireList('add',130)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="belly-dance-sound-light-show-excursion">1001 Night Show in Sharm</a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">Have a nice oriental night with sound and light show about Egyptian Civilization, Belly dance show, Tannoura Show and folkloric dance show. Pick up fr...</p>
                <div class="fprice">&pound;41</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="camel-safari-see-bedouins-sharm-excursion"><img src="systemimages/sharm-camel-ride.jpg" class="exbox-img" alt="Camel Ride & Bedouin Tea in Sharm" /></a>
				<span class="changeAddAjax"><span id="change_add_126"><a rel="nofollow" href="javascript: addToEnquireList('add',126)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="camel-safari-see-bedouins-sharm-excursion">Camel Ride & Bedouin Tea in Sharm</a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">Discover the Bedouin life, take a tour on camel & have a nice Bedouin tea, enjoy the atmosphere of Bedouin Tent. 
Pick up from hotel by Van, drive to...</p>
                <div class="fprice">&pound;29</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="watch-colored-fish-in-red-sea-excursion"><img src="systemimages/sharm-glass-boat.jpg" class="exbox-img" alt="Glass Boat Trip in Sharm" /></a>
				<span class="changeAddAjax"><span id="change_add_135"><a rel="nofollow" href="javascript: addToEnquireList('add',135)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="watch-colored-fish-in-red-sea-excursion">Glass Boat Trip in Sharm</a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">Enjoy the view of different Reefs, Corals & Colored fish, with availability of snorkeling for 10 minutes. Pick up from hotel in the morning, drive for...</p>
                <div class="fprice">&pound;18</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="quad-biking-in-sharm-excursion"><img src="systemimages/sharm-desert-quad-biking.jpg" class="exbox-img" alt="Safari Excursions Quad Runner in Sharm" /></a>
				<span class="changeAddAjax"><span id="change_add_125"><a rel="nofollow" href="javascript: addToEnquireList('add',125)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="quad-biking-in-sharm-excursion">Safari Excursions Quad Runner in Sharm</a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">An adventure on a four wheels quad to discover the beauty of the sun set or sun rise in the desert, including tea at the Bedouin Tent . 
Pick up from...</p>
                <div class="fprice">&pound;20</div>
            </div>
            </div></div>
		<div class="col-xs-12 col-sm-4"><div class="exbox f_in clearfix">
			<div class="exbox-img-hold">
				<a href="sharm-private-transfer-airport-hotel-excursion"><img src="systemimages/transfer.jpg" class="exbox-img" alt="Transfers in Sharm " /></a>
				<span class="changeAddAjax"><span id="change_add_138"><a rel="nofollow" href="javascript: addToEnquireList('add',138)" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
			</div>
			<div class="exbox-inner">
				<a class="exbox-h" href="sharm-private-transfer-airport-hotel-excursion">Transfers in Sharm </a>
				<div class="stars"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                <p class="s">We provide you all transfers in Sharm. Transfer from Airport to any Hotel in Sharm in A-C van This price : only 12 GBP. per way till 4 persons , and m...</p>
                <div class="fprice">&pound;7</div>
            </div>
            </div></div></div></div></div>
  </div>
</div>
<!-- /.main col -->
</div>
@push('bars')
    @include('client.layouts.rightbar.whyus')
@endpush

    
@endsection