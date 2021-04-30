<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Cart;
use Auth;
use App\Models\Order;

class CartController extends Controller
{
    public function viewCart()
    {
    	$data = DB::table('users')
       ->join('cart', 'cart.user_id', '=', 'users.id')
       ->join('products', 'products.id', '=', 'cart.product_id')
       ->select('products.id as productID','cart.id as cartID','products.*','cart.*')
       ->where("users.id",Auth::user()->id)->where("cart.status","pending")->get();
		
		  return view("Frontend/Cart/cart" , ["data" => $data]);

    }
    public function addToCart(Request $request)
    {
      if(!empty(Auth::user()->id))
      {
          $cart = Cart::create([

          'user_id' => Auth::user()->id,
          'product_id' => $request->prodcut_id,
          'product_quantity' => $request->product_quantity,
          'added_date' => Date("Y m d"),
          'status' => "pending",
        ]);

        return redirect('cart');
      }
      else
      {
        return redirect('login');
      }
      
    }
    public function destroyCartOrder($id)
    {
      $delete_cart_order = Cart::find($id);

      $delete_cart_order->delete();

      return redirect("view-cart");
    }

    public function view_checkout()
    {
      
      $data = DB::table('users')
       ->join('cart', 'cart.user_id', '=', 'users.id')
       ->join('products', 'products.id', '=', 'cart.product_id')
       ->select('products.id as productID','cart.id as cartID','products.*','cart.*')
       ->where("users.id",Auth::user()->id)->where("cart.status","pending")->get();
    
      return view("Frontend/Cart/checkout" , ["data" => $data]);

      
    }
    public function save_heckout(Request $request)
    {
        // $order = Order::create([

        //     'cart_id' => $request->product_id,
        //     'user_id' => Auth::User()->id,
        //     'quantity' => $request->quantity,
        //     'total_price' => $request->total_price,
        //     'status' => "pending",
        // ]);

        // $order = Cart::where("user_id",Auth::User()->id)->update([
              
        //       'status' => "ordered",
        // ]);

        return redirect('checkout');        
    }
    	
	}

