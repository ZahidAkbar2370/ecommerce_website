<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('Frontend/Profile/profile');
    }
    public function update(Request $request)
    {
    	$profile_update = User::where("id",Auth::User()->id)->update([

    			'user_name' => $request->user_name,
    			'email' => $request->email,
    			'user_country' => $request->user_country,
    			'user_city' => $request->user_city,
    			'user_address' => $request->user_address,
    			'user_phone' => $request->user_phone,
    			'user_postal_code' => $request->user_postal_code,

    	]);

    	return redirect('profile');
    }
}
