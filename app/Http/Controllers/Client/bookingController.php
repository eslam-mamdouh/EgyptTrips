<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\postBooking;
use App\Models\Trip;
use App\Models\Booking;
use Mail;
use App\Mail\Booking as BookingMail;
class bookingController extends Controller
{
    public function index($tripSlug)
    {
        $trip = Trip::where('slug' , $tripSlug)->first();
        return view('client.booking' , ['trip'=>$trip]);
    }

    public function book(postBooking $request , $tripSlug)
    {
        $data = $request->validated();
        $trip = Trip::where('slug' , $tripSlug)->first();
        $totalPrice = ($trip->price*$data['adults'])+($trip->child_price*$data['children']);
        $booking = new Booking;
        $booking->name        = $data['name'];
        $booking->email       = $data['email'];
        $booking->phone       = $data['phone'];
        $booking->country     = $data['country'];
        $booking->location    = $data['location'];
        $booking->date        = $data['date'];
        $booking->adults      = $data['adults'];
        $booking->children    = $data['children'];
        $booking->trip        = $trip->title;
        $booking->total_price = $totalPrice;
        $booking->save();
        $data['total_price'] = $totalPrice;
        $data['trip'] = $trip->title;

        Mail::to($data['email'])->send(new BookingMail($data));
        return back()->with('message', 'Your Booking Sent Successfully.');
    }
}
