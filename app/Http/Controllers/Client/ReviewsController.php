<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TripsDistination;
use App\Models\Review;
use App\Models\Trip;
use App\Http\Requests\Client\Reviews\StoreReview;

class ReviewsController extends Controller
{
    public function index(){
        // $reviews = Review::with("trip")->get();
        $reviews = Trip::join('reviews','reviews.trip','=','trips.title')
                        ->select('reviews.*','trips.id','trips.slug')->get();

        $revCount = Review::count();

        return view('client.reviews.index' , ['reviews'=>$reviews,'revCount'=>$revCount]);
    }

    public function add(){
        $tripsDists = TripsDistination::with("trips")->get();
        return view('client.reviews.add',['tripsDists'=>$tripsDists]);
    }

    public function store(StoreReview $request){

        $data = $request->validated();
        Review::create($data);
        return back()->with("message",'Your Review Sent Successfully');
    }
}
