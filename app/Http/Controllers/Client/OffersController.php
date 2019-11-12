<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
class OffersController extends Controller
{
    public function index()
    {
        $offers = Offer::all(); 
        return view('client.offers', ['offers'=>$offers]);
    }
}
