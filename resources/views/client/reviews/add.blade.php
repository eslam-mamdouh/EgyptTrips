@extends('client.layouts.master')
@section('content')


<div class="col-md-9">

                <!-- /.main col -->  
                <h1>Write a Review <small>Your review of Egypt Excursions</small></h1>
                     
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li><li><a href="/reviews">Egypt Excursion Reviews</a>
                    </li><li class="active">Write a Review</li>
                </ul>
                
                           
                
            <p class="lead">Please share your experience and opinions of Egypt Excursions with the rest of the world, and help us show why we're Egypt's favourite tour operator</p>
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
            <form id="form1" name="form1" method="post" action="/reviews/add" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                  <label for="trip">Excursion to review</label>
                  <select name="trip" required id="trip" class="form-control">
                    @foreach($tripsDists as $dist)

                        <optgroup label="{{$dist->name}}">

                            @foreach($dist->trips as $trip)
                            <option value="{{$trip->title}}">{{$trip->title}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                        <optgroup label="Other">
                            <option value="General">General Comment</option>
                        </optgroup>
                  </select>
                      </div>
                      
                <div class="row"><div class="col-sm-6">	  
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input name="name" value="{{old('name')}}" required type="text" id="name" class="form-control">
                    </div>
                </div><div class="col-sm-6">
                    <div class="form-group">	
                        <label for="country">Your Country</label> 
                        <input name="country" value="{{old('country')}}" required type="text" id="country" class="form-control">
                    </div>
                </div></div>
                            
                
                
                <div class="form-group">
                    <label for="rating">Your Review:</label>
                    <div class="input-group">
                        <span class="input-group-addon">Rating</span>
                        <select name="rate" class="form-control">
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                        <span class="input-group-addon"> / 5</span>
                    </div>
                </div>
                
                <div class="form-group">	
                    <textarea name="comment" class="form-control" rows="12" id="comment" placeholder="Your review here...">{{old('comment')}}</textarea>
                </div>
                                    
                
                <hr class="break">
                        
                <div class="panel panel-default">
                    <div class="panel-heading">Additional Information</div>
                    <div class="panel-body">
                        
                        <label for="comments">Message to Us:</label>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="6" id="message" placeholder="What you did like, what you didn't like, how could we improve our service / website?">{{old('message')}}</textarea>
                        </div>
                    </div>
                </div>
                       
                {{--  <div class="panel panel-default">
                    <div class="panel-heading">Optional Upload Pictures</div>
                    <div class="panel-body">
                        <p>If you'd like to share some pictures of your time with us then please do!</p>
                        
                        <div class="row">
                            <div class="col-sm-6"><input name="image1" type="file"></div>
                            <div class="col-sm-6"><input name="image2" type="file"></div>
                        </div>
                    </div>
                </div>  --}}
                        
                        
                        
                    
                    <h2>Submit Review</h2>
                    
                    <div class="input-group input-group-lg">
                      {{--  <span class="input-group-addon" id="sizing-addon1">two + 5 = </span>
                      <input name="code" id="code" type="text" class="form-control" placeholder="?" aria-describedby="sizing-addon1">  --}}
                      <span class="input-group-btn">
                        <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                      </span>
                    </div>
                    
                </form>
                <!-- /.main col -->  
                           
                          </div>


 @push('bars')
            @include('client.layouts.rightbar.basketOffer')
            @include('client.layouts.rightbar.policies')
        @endpush
@endsection