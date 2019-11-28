@extends('client.layouts.master')
@section('content')




<div class="col-md-9">
							<div class="exc_fb">
								<div class="fb-like" data-href="" data-layout="button_count" data-action="like"
									data-show-faces="false" data-share="true"></div>
						
							</div>
							<h1>{{trans('client.trips.index.title')}} {{$dist}}</h1>
							<p class="lead">
								{{trans('client.trips.index.header')}}  
							</p>
							<p>
								{{trans('client.trips.index.info')}}
							</p>
							<div class="catbanner" style="background-image: url(systemimages/cat_banners/4.jpg); ">
								<h2><a href="">
									 All Tours, Excursions and Trips from {{$dist}}
										<small>from just 7 per person in our sale</small></a></h2>
							</div>
							<div class="catHolder">
								<div class="row">
                                    @foreach($trips as $trip)
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="exbox f_in clearfix">
                                                <div class="pp10">&nbsp;</div>
                                                <div class="exbox-img-hold">
                                                    <a href="/trips/{{$trip->slug}}"><img
                                                            src="{{$trip->image}}"
                                                            class="exbox-img"
                                                            alt="{{$trip->title}}" /></a>
                                                    <span class="changeAddAjax"><span id="change_add_173"><a rel="nofollow"
                                                                href="/trips/{{$trip->slug}}/book"
                                                                class="btn btn-success btn-bottom-right"><i
                                                                    class="fa fa-plus"></i>{{trans('client.add_to_basket')}}</a></span></span>
                                                </div>
                                                <div class="exbox-inner">
                                                    <a class="exbox-h"
                                                        href="/trips/{{$trip->slug}}">{{$trip->title}}</a>
                                                    <div class="stars">
                                                            @for($i=1 ; $i<=$trip->rate(); $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                    </div>
                                                    <div class="s">{!!$trip->description !!}</div>
                                                    <div class="fprice">${{$trip->price}}</div>
                                                </div>
                                            </div>
                                        </div> 
                                    @endforeach
								
								</div>
							</div>
				
						
					
							<h2>Excursions and Tours in {{$dist}} </h2>
							<p>Over the years we've built our reputation to become Egypt's favourite tour operator, just
								read our reviews and you'll see why! So if you're going on holiday to Aswan in Egypt and
								looking for some tours, staying in Alexandria and wondering what excursions are on offer
								or holidaying in Luxor, egyptexcursions.co.uk have tours, trips and excursions to make
								your holiday one to remember.</p>
							<p>With egyptexcursions.co.uk you're in safe hands, with thousands of very happy customers
								each year, just read our reviews to see why since 1998 we have been Egypt's favourite
								tour operator!</p>
							<h3>Cairo, Luxor, Aswan, Sharm el Sheikh and Hurghada Tours</h3>
							<p>Over the years we've become well-known for our wide range of family-friendly tours and
								trips throughout all the Egyptian tourist resorts. We know better than anybody that the
								days you'll remember most of your holiday to Egypt weren't the lazy days you spent
								around the poolside (although that does sound pretty good), rather it will be the
								amazing days you spent visiting the ancient Pyramids of Giza on our Cairo tours, the
								afternoon you spent scuba diving amongst the colour fish of the Red Sea, or the mornign
								spent zooming over the golden desert sands on a quad bike!</p>
							<p>Book your tours in Egypt today and make the most of your time in Egypt.</p>
							<hr class="break" />
					
					
						</div>



        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.whyus')
        @endpush
@endsection