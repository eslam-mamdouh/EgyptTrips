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
			@foreach ($distinations as $dist )	
				<li role="presentation" @if($loop->first) class="active" @endif>
					<a href="#{{$dist->id}}" aria-controls="{{$dist->id}}" role="tab" data-toggle="tab">Trips From {{$dist->name}}</a>
				</li>
			@endforeach  
		
		</ul>
	<!-- Tab panes -->
		<div class="tab-content" style="padding-top: 15px;">
			@foreach ($distinations as $dist )	
				<div role="tabpanel" class="tab-pane @if($loop->first) active @endif" id="{{$dist->id}}">
					<div class="catHolder">
						<div class="row">

							@foreach ($trips as $trip)
								
								@if ($trip->distination_id == $dist->id)
								
									<div class="col-xs-12 col-sm-4">
										<div class="exbox f_in clearfix">
											<div class="pp">&nbsp;</div>
											<div class="exbox-img-hold">
												<a href="glass-bottom-boat-hurghada-excursion"><img src="{{$trip->image}}" class="exbox-img" alt="Glass Bottom Boat Hurghada" /></a>
												<span class="changeAddAjax"><span id="change_add_163"><a rel="nofollow" href="javascript: addToEnquireList('add',{{$trip->id}})" class="btn btn-success btn-bottom-right"><i class="fa fa-plus"></i> Add to Basket</a></span></span>
											</div>
											<div class="exbox-inner">
												<a class="exbox-h" href="glass-bottom-boat-hurghada-excursion">{{$trip->title}}</a>
												<div class="stars">
													@for($i=1 ; $i<=$trip->rate(); $i++)
														<i class="fa fa-star"></i>
													@endfor
												</div>
												<p class="s">{{$trip->description}}</p>
												<div class="fprice">&pound;{{$trip->price}}</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach

						</div>
					</div>
				</div>
			@endforeach

		</div>
	</div>
<!-- /.main col -->
</div>
@push('bars')
    @include('client.layouts.rightbar.whyus')
@endpush

    
@endsection