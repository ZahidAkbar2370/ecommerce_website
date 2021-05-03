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
          'order_id' => "0",
          'status' => "pending",
        ]);

        return redirect('view-cart');
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
      if($request->total_price != "0" && $request->total_items != "0")
      {
        $order = Order::create([

            'user_id' => Auth::User()->id,
            'total_price' => $request->total_price,
            'total_items' => $request->total_items,
        ]);

        // dd($order);
        $updateCart = Cart::where("user_id",Auth::User()->id)->where("status","pending")->update([
              
              'status' => "ordered",
              'order_id' => $order->id,
        ]);
      }
        return redirect('checkout');  

    }
    	
	}

