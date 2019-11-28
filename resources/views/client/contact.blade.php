@extends('client.layouts.master')
@section('content')
    <div class="col-md-9">
<!-- /.main col -->             
<h1>Contact Us</h1>
<ul class="breadcrumb">
    <li><a href="index.html" id="home">Home</a></li>
    <li class="active">{{trans('client.contact.title')}}</li>
</ul>
<p class="lead">{{trans('client.contact.welcome')}} GetYourTripEgypt.com</p>
<p><strong>Email :</strong> info@getyourtripegypt.com</p>
<p><strong>Phone :</strong> +201000388127</p>
<h2>Enquiries</h2>
@if (session('message'))
    <p class="alert alert-success">{{session('message')}}</p>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form id="form1" name="form1" method="post" action="/contact">
    @csrf
<div class="row">
<div class="col-sm-6 form-group">
    <label for="name">{{trans('client.contact.form.name')}}:</label>
    <input name="name" type="text" id="name" class="form-control" value="{{old('name')}}" />
    
</div>
<div class="col-sm-6 form-group">
    <label for="email">{{trans('client.contact.form.email')}}:</label>
    <input name="email" type="text" id="email" class="form-control" value="{{old('email')}}" />
    
</div>
</div>
		<div class="form-group">
			<label for="subject">{{trans('client.contact.form.subject')}}:</label>
            <input name="subject" type="text" id="subject" value="{{old('subject')}}" class="form-control" />
		</div> 
<div class="form-group">
	<label for="comment">{{trans('client.contact.form.comment')}}:</label>
    <textarea name="comment" rows="4" class="form-control" id="comment"></textarea>
</div>
<p><input type="submit" name="Submit" value="{{trans('client.contact.form.submit')}}" class="btn btn-success" /></p>
</form>
<h2>Online Booking</h2>
<p>If you would like to book now and reserve your places, please use our secure <a href="booking.html">online booking system</a>.</p>
<!-- /.main col -->  
          </div>

          @push('bars')
              @include('client.layouts.rightbar.basketOffer')
              @include('client.layouts.rightbar.whyus')
          @endpush
@endsection