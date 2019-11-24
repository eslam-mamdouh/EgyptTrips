@extends('client.layouts.master')
@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')

    <div class="col-md-9">
<!-- /.main col -->             
<h1>Our Customer Reviews</h1>
<ul class="breadcrumb">
    <li><a href="/reviews">Home</a>
    <li class="active">Customer Reviews</li>
</ul>
			
<div class="row" style="margin-bottom: 15px;">
	<div class="col-sm-4">
		<div class="exbox exbox_excursion_page">
			<div class="pp10">&nbsp;</div>
			<div class="exbox-img-hold">
				<img src="{{$trip->image}}" class="exbox-img">
			</div>
			<div class="exbox-inner">
				
<div id="trip_inline_details">

	<div class="trip_inline_details_l">
		
	<table class="table pricing_table">
		<thead>
		<tr>
			<th class="head"></th> 
			<th class="head">Sale Price</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td class="price_band">Adult:</td>
				<td class="offer_price">{{$trip->price}}</td>
			</tr>
			{{-- <tr>
				<td class="price_band">Child: <span class="small">(4 - 12)</span></td><td class="offer_price">£98</td>
			</tr>
			<tr>
				<td class="price_band">Under 4:</td><td class="offer_price">Free</td>
			</tr> --}}
		</tbody>
	</table>
	</div>
	{{-- <div class="ttimings">
		<p class="t">
			2 Day Tour
		</p>

	</div> --}}
</div>

			</div>
		</div>
	</div>
	<div class="col-sm-8">

		<p class="lead exc_lead">{!! $trip->description !!}.</p>
		<div class="mod-cal-box">
		<div class="row"><div class="col-sm-5">

	<div id="tour_cal">
		<div class="datepicker datepicker-inline">
			<div class="datepicker-days" style="display: block;">
				{{-- <table class=" table-condensed">
					<thead>
						<tr>
							<th class="prev" style="visibility: hidden;">«</th>
							<th colspan="5" class="datepicker-switch">November 2019</th>
							<th class="next" style="visibility: visible;">»</th>
						</tr>
						<tr>
							<th class="dow">Mo</th>
							<th class="dow">Tu</th>
							<th class="dow">We</th>
							<th class="dow">Th</th>
							<th class="dow">Fr</th>
							<th class="dow">Sa</th>
							<th class="dow">Su</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="old disabled day">28</td>
							<td class="old disabled day">29</td>
							<td class="old disabled day">30</td>
							<td class="old disabled day">31</td>
							<td class="disabled day">1</td>
							<td class="disabled day">2</td>
							<td class="disabled day">3</td>
						</tr>
						<tr>
							<td class="disabled day">4</td>
							<td class="disabled day">5</td>
							<td class="disabled day">6</td>
							<td class="disabled day">7</td>
							<td class="disabled day">8</td>
							<td class="disabled day">9</td>
							<td class="disabled day">10</td>
						</tr>
						<tr>
							<td class="disabled day">11</td>
							<td class="disabled day">12</td>
							<td class="disabled day">13</td>
							<td class="disabled day">14</td>
							<td class="disabled day">15</td>
							<td class="disabled day">16</td>
							<td class="day">17</td></tr><tr>
								<td class="disabled day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="disabled day">22</td><td class="disabled day">23</td><td class="day">24</td></tr><tr><td class="disabled day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="disabled day">29</td><td class="disabled day">30</td><td class="new day">1</td></tr><tr><td class="new disabled day">2</td><td class="new day">3</td><td class="new day">4</td><td class="new day">5</td><td class="new disabled day">6</td><td class="new disabled day">7</td><td class="new day">8</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: hidden;">«</th><th colspan="5" class="datepicker-switch">2019</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month disabled">Jan</span><span class="month disabled">Feb</span><span class="month disabled">Mar</span><span class="month disabled">Apr</span><span class="month disabled">May</span><span class="month disabled">Jun</span><span class="month disabled">Jul</span><span class="month disabled">Aug</span><span class="month disabled">Sep</span><span class="month disabled">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: hidden;">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old disabled">2009</span><span class="year disabled">2010</span><span class="year disabled">2011</span><span class="year disabled">2012</span><span class="year disabled">2013</span><span class="year disabled">2014</span><span class="year disabled">2015</span><span class="year disabled">2016</span><span class="year disabled">2017</span><span class="year disabled">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table> --}}
			</div>
		</div>
	</div>
    <script>
	$("#tour_cal").datepicker({
		format: "yyyy-mm-dd",
		language: "en-GB",
		daysOfWeekDisabled: "1,5,6",
		weekStart: 1,
		startDate: "2019-11-17"
    });

	$("#tour_cal").on("changeDate", function(event) {
		var selected_date = $("#tour_cal").datepicker("getFormattedDate");
		selectDate("83", selected_date);
	});

	</script>
	
			</div>
			<div class="col-sm-7">
				<div class="price-promise">

				
		<span id="changeAddAjax"> <span id="change_add_83">
			<a rel="nofollow" href="javascript: addToEnquireList('add',83)" class="btn btn-lg btn-success"><i class="fa fa-plus-circle"></i>  Add to Basket</a>
		</span> </span>
		
				{{-- <a href="/booking/login.php?add_favourites=83" class="btn btn-default btn-lg">
					<i class="fa fa-heart"></i>
				</a> --}}

				
                {{-- <div class="row pickup_details">
                    <div class="col-xs-6"><em>Hotel Pickup:</em> 05:00</div>
                    <div class="col-xs-6"><em>Hotel Return:</em> 20:00 Next Day</div>
                </div> --}}

				</div>
			</div>
		</div>
        </div>

	</div>
</div>

						
				<!-- /.main col -->  
          </div>

        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.whyus')
        @endpush
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/js/bootstrap-datetimepicker.min.js"></script>
    
@endsection