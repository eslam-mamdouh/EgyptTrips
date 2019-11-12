<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TripsDistination;
use App\Models\Trip;
class HomeController extends Controller
{
    
    public function index(){

        // didn't use eager loading because of image not append in trips
        $distinations = TripsDistination::all();
        $tripsIDs = $distinations->pluck('id');
        $trips = Trip::whereIn('distination_id' , $tripsIDs)->limit(6)->get();
        
        return view('client.home' , ['distinations'=>$distinations , 'trips'=>$trips]);
    }
}
