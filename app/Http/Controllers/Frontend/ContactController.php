<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
    	return view("Frontend/Contact/contact");
    }

    public function store(Request $request)
    {
    	$validateData = $request->validate(
            [
                'name' => 'required|max:225',
                'email' => 'required|max:225',
                'message' => 'required|max:20000',
            ]
        );

        Contact::create($validateData);
        
    	return view('Frontend/Contact/contact',["message" => "Message Sent Successfully"]);
    }

}
