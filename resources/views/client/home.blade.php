@extends('client.layouts.master')
@section('content')
        <div class="col-md-9">
            <div class="exc_fb">
                <div class="fb-like" data-href="" data-layout="button_count" data-action="like"
                    data-show-faces="false" data-share="true"></div>
        
            </div>
            <h1>Excursions, Tours & Trips in Egypt</h1>
            <p class="lead">Egypt Excursions offers tours and excursions from all the major tourist
                resorts in Egypt including Cairo, Luxor, Sharm el Sheikh, Hurghada, Alexandria and
                Aswan. </p>
            <p>We've been taking UK tourists on tours to Egypt's famous sights since 1998 so we're one
                of Egypt's most established tour operators.</p>

            @foreach ($distinations as $dist)
                
                <div class="catbanner" style="background-image: url({{$dist->image}}); ">
                    <h2><a href="excursions-from-hurghada.html">Tours, Excursions and Trips from {{$dist->name}}
                            <small>from just 7 per person in our sale</small></a></h2>
                </div>
                <div class="catHolder">
                    <div class="row">
                        @foreach ($trips as $trip)
                            @if ($trip->distination_id == $dist->id)
                                
                            <div class="col-xs-12 col-sm-4">
                                <div class="exbox f_in clearfix">
                                    <div class="pp10">&nbsp;</div>
                                    <div class="exbox-img-hold">
                                        <a href=""><img
                                                src="{{$trip->image}}"
                                                class="exbox-img"
                                                alt="" /></a>
                                        <span class="changeAddAjax"><span id="change_add_173"><a rel="nofollow"
                                                    href="javascript: addToEnquireList('add',{{$trip->id}})"
                                                    class="btn btn-success btn-bottom-right"><i
                                                        class="fa fa-plus"></i> Add to Basket</a></span></span>
                                    </div>
                                    <div class="exbox-inner">
                                        <a class="exbox-h"
                                            href="">{{$trip->title}}</a>
                                        <div class="stars">
                                             @for($i=1 ; $i<=$trip->rate(); $i++)
                                                <i class="fa fa-star"></i>
                                             @endfor
                                        </div>
                                        <p class="s">{!! $trip->description !!}...</p>
                                        <div class="fprice">${{$trip->price}}</div>
                                    </div>
                                </div>
                            </div> 
                            @endif
                        @endforeach
                    </div>
                    <div class="catHolder_bottom">
                        <p align="center"><a class="btn btn-primary"
                                href="/distination/trips/{{$dist->slug}}">View all Trips from {{$dist->name}}</a></p>
                        <p align="center">There's Trips from {{$dist->name}} starting from just &pound;7, click
                            to view our full range.</p>
                    </div>
                </div>
            @endforeach

        
        
    
            <h2>Excursions and Tours in Egypt</h2>
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
            @if($lstReview)

                <h3>Our Latest Review</h3>
                <div itemscope itemtype="http://data-vocabulary.org/Review" class="testomonials blue">
                        <div class="ph">
                            <img src="{{$lstReview->image}}" width="100px" height="100px" class="test_img" />
                        </div>
                                <strong itemprop="itemreviewed"><a href="/trips/{{$lstReview->slug}}">{{$lstReview->trip}} </a></strong>
                                <div itemprop="rating" content="5" class="stars">
                                    @for($i=1 ; $i <= $lstReview->rate ; $i++ )
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                </div>
                                <div itemprop="description" class="main">
                                    {{$lstReview->comment}}
                                </div>
                        <div class="test_name">
                            <strong><span itemprop="reviewer">{{$lstReview->name}}</span></strong> 
                            from {{$lstReview->country}}  - {{$lstReview->created_at}}
                        </div>
                    </div>
                @endif

            <hr class="break" />
    
        </div>

        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.policies')
        @endpush
@endsection