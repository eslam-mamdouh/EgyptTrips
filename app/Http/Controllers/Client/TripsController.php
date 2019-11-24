<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
class TripsController extends Controller
{
    public function distinationTrips($distSlug){
        $trips = Trip::join("trips_distinations",'trips.distination_id' , '=','trips_distinations.id')
                        ->where('trips_distinations.slug',$distSlug)
                        ->select('trips.*' , 'trips_distinations.name as dist')->get();
        return view('client.trips.index',['trips'=>$trips , 'dist'=>$trips[0]->dist]);
    }

    public function trip($slug)
    {
        $trip = Trip::where("slug" ,$slug)->first();
        return view('client.trips.show',['trip'=>$trip]);
    }
}
