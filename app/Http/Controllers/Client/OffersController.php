<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Trip;
use App\Models\TripsDistination;
class OffersController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        $distinations = TripsDistination::all();
        $tripsIDs = $distinations->pluck('id');
        $trips = Trip::whereIn('distination_id' , $tripsIDs)->limit(6)->get();
        // dd($trips);
        return view('client.offers', ['offers'=>$offers,'trips'=>$trips]);
    }
}
