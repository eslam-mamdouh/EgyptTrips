@extends('client.layouts.master')
@section('content')
    <div class="col-md-12">
					<h2 class="isotope-button-title">trip World Gallery</h2>
					<hr>
					<div id="isotope-filters" class="isotope-button-group"><button type="button"
							class="link" data-filter="*"><a href="/galleries#images"> show all</a></button> <button type="button"
							class="link" data-filter=".dolphin-show"><a href="/galleries/{{$dists[0]->slug}}#images"> from {{$dists[0]->name}} </a>
						</button> <button type="button" class="link" data-filter=".show-animals"><a href="/galleries/{{$dists[1]->slug}}#images">Trips from
							{{$dists[1]->name}}</a></button> <button type="button" class="link is-checked"
							data-filter=".dolphin-therapy"><a href="/galleries/{{$dists[2]->slug}}#images">Trips from {{$dists[2]->name}}</a></button></div>
				</div>

				@foreach ($galleries as $gallery)	
					<div id="images" class="col-md-3 col-sm-12 ">
						<div class="image-gg">
							<img src="{{$gallery->image}}" alt="" width="100%"
							height="100%">
						</div>
					</div>
				@endforeach
		</div>
@endsection