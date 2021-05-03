<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    public function index()
    {
    	$data = DB::table('orders')
	       ->join('users', 'users.id', '=', 'orders.user_id')
	       ->select('users.*','users.id as userID','orders.*','orders.id as orderID')
	       ->get();
    
      return view("Admin/Order/view_orders" , ["data" => $data]);
    }

    public function order_detail($id)
    {
    	$data = DB::table('orders')
       ->join('cart', 'cart.order_id', '=', 'orders.id')
       ->join('products', 'products.id', '=', 'cart.product_id')
       ->join('users', 'users.id', '=', 'orders.user_id')
       ->select('products.id as productID','cart.id as cartID','products.*','cart.*','users.*','orders.created_at as Order_Created_At')
       ->where("cart.status","ordered")->where("orders.id",$id)->get();

       // dd($data);
       return view("Admin/Order/view_order_detail" , ["data" => $data]);
    	// $data = DB::table('orders')
	    //    ->join('users', 'users.id', '=', 'orders.user_id')
	    //    ->select('users.*','users.id as userID','orders.*','orders.id as orderID')
	    //    ->get();
    }
}
