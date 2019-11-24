@extends('client.layouts.master')
@section('content')
    <div class="col-md-12">
					<h2 class="isotope-button-title">{{trans('client.gallery.title')}}</h2>
					<hr>
					<div id="isotope-filters" class="isotope-button-group">
							<button type="button"
								class="link" data-filter="*"><a href="/galleries#images"> show all</a>
							</button>
							@foreach ($dists as $dist )
								<button type="button"
									class="link" data-filter=".dolphin-show"><a href="/galleries/{{$dist->slug}}#images"> from {{$dist->name}} </a>
								</button>
							@endforeach
							

					</div>
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