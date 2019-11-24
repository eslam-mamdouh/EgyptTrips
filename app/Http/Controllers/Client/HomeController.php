<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TripsDistination;
use App\Models\Trip;
use App\Models\Review;
use App;
class HomeController extends Controller
{
    
    public function index(){

        if(!session("locale")){
            $locale = App::getLocale();
            session()->put('locale', $locale);
        }
        
        // didn't use eager loading because of image not append in trips
        $distinations = TripsDistination::all();
        $tripsIDs = $distinations->pluck('id');
        $trips = Trip::whereIn('distination_id' , $tripsIDs)->limit(6)->get();
        $lstReview = Trip::join('reviews','reviews.trip','=','trips.title')
                        ->select('reviews.*','trips.id','trips.slug')->latest()->first();
        
        return view('client.home' , 
            [
             'distinations'=>$distinations ,
             'trips'=>$trips,
             'lstReview'=>$lstReview
            ]
        );
    }
}
