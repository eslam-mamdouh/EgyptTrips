@extends('client.layouts.master')
@section('content')
    
<div class="col-md-9">
  
    <!-- /.main col -->             
    <h1>Our Cancellation Policy</h1>
  
    <h2>Cancellations</h2>
    <p>As long as you cancel at least 3 days before going on your excursion, you will not have to pay the balance due for your trip, although the deposit cannot be refunded. If you cancel within 3 days of your trips departure date we will let you know of any charges. These are only likely to be applied if we have had to pay a substabtial outlay for your trip and will not get it back - i.e. flights. If external factors beyond our control restrict us from operating any tours (i.e. Cairo Tour) we will always offer you the chance to use your deposit towards other tour(s).</p>
    
    <h2>Ammendments</h2>
    <p>If you decide you do not want to go on your trip, you are welcome to use your deposit towards another trip, there will not be ANY charge for this as long as we do not incur any charges. Usually this would only happen if we need to change details for flights on a flight excursion, i.e. Cairo by Air, in this case you will be notified by our customer support department of any such charges.</p>
    
    <!-- /.main col -->  
             
</div>
        @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.whyus')
        @endpush

@endsection