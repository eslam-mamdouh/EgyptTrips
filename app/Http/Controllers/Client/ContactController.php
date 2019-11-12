<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\postContact;
use App\Contact;
class ContactController extends Controller
{
    public function index(){
        return view('client.contact');
    }

    public function postInquiry(postContact $request)
    {
        $data = $request->validated();
        
        $contact = Contact::create($data);
        if($contact){
            return back()->with("message" , "Your Inquiry Sent Successfully");
        }
    }
}
