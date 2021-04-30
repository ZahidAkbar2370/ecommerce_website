<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class BuyerController extends Controller
{
    public function index()
    {
    	$all_buyers = User::all();

    	return view("Admin/Buyer/view_buyers",["all_buyers" => $all_buyers]);
    }

    public function create()
    {
    	return view("Admin/Buyer/add_buyer");
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'user_name' => 'required|max:225',
                'email' => 'required|max:225',
                'user_country' => 'required|max:225',
                'user_city' => 'required|max:225',
                'user_address' => 'required|max:1500',
                'user_phone' => 'required|max:225',
                'user_postal_code' => 'required|max:225',
                'password' => 'required|max:225',
            ]
        );
  
        $add_buyer = User::create($validateData);

		return redirect('view-buyers');  

        //      $add_category = User::create([

        //  'user_name' => $request->user_name,
  //        'email' => $request->email,
  //        'user_country' => $request->user_country,
  //        'user_city' => $request->user_city,
  //        'user_address' => $request->user_address,
  //        'user_phone' => $request->user_phone,
  //        'user_postal_code' => $request->user_postal_code,
  //        'password' => Hash::make($request->password),
        // ]);  	
    }

    public function destroy($id)
    {
    	$delete_buyer = User::find($id);

    	$delete_buyer->delete();

    	return redirect('view-buyers');
    }

    public function edit($id)
    {
        
    	$edit_buyer = User::find($id);
        
        return view('Admin/Buyer/edit_buyer',["edit_buyer" => $edit_buyer]);
    }

    public function update(Request $request,$id)
    {
    	$buyer_update = User::where("id",$id)->update([

    			'user_name' => $request->user_name,
    			'email' => $request->email,
    			'user_country' => $request->user_country,
    			'user_city' => $request->user_city,
    			'user_address' => $request->user_address,
    			'user_phone' => $request->user_phone,
    			'user_postal_code' => $request->user_postal_code,

    	]);

    	return redirect('view-buyers');
    }
}
