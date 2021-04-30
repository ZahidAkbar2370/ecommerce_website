<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    	// $all_orders = Order::all();

    	// return view("Admin/Order/view_orders",["all_orders" => $all_orders]);

    	return view("Admin/Order/view_orders");
    }
}
