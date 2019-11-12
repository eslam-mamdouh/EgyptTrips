<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\TripsDistination;

class GalleryController extends Controller
{
    public function index()
    {
        $dists = TripsDistination::limit(3)->get();
        $galleries = Gallery::all(); 
        return view('client.gallery', ['galleries'=>$galleries,'dists'=>$dists]);
    }

    public function distImages($distSlug)
    {
        $dists = TripsDistination::limit(3)->get();
        $galleries = Gallery::where("slug",'like' , $distSlug)->get();

        return view('client.gallery', ['galleries'=>$galleries,'dists'=>$dists]);        
    }
}
