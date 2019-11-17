@extends('client.layouts.master')
@section('content')
    <div class="col-md-9">
<!-- /.main col -->             
<h1>Our Customer Reviews</h1>
<ul class="breadcrumb">
    <li><a href="/reviews">Home</a>
    <li class="active">Customer Reviews</li>
</ul>
<p>Don't just take our word for it, see why we're Egypt's favourite tour operator from reviews written by our previous customers. If you have been on a trip with us please feel free to leave a review and help spread the word!</p>
<p align="center"><a href="/reviews/add" class="btn btn-success btn-lg">Write a Review</a></p>               
<h2>{{$revCount}} Customers Have Written a Review so far <small>and more being added daily!</small></h2>
			
			@foreach($reviews as $review)

				<div itemscope itemtype="http://data-vocabulary.org/Review" class="testomonials blue">
					<div class="ph">
						<img src="{{$review->image}}" width="100px" height="100px" class="test_img" />
					</div>
							<strong itemprop="itemreviewed"><a href="/trips/{{$review->slug}}">{{$review->trip}} </a></strong>
							<div itemprop="rating" content="5" class="stars">
								@for($i=1 ; $i <= $review->rate ; $i++ )
									<i class="fa fa-star" aria-hidden="true"></i>
								@endfor
							</div>
							<div itemprop="description" class="main">
								{{$review->comment}}
							</div>
					<div class="test_name">
						<strong><span itemprop="reviewer">{{$review->name}}</span></strong> 
						from {{$review->country}}  - {{$review->created_at}}
					</div>
				</div>

			@endforeach
				
						
				<!-- /.main col -->  
          </div>
        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.whyus')
        @endpush
@endsection