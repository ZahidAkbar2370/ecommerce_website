<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Session;
use App\Models\Cart;
use DB;    

class HomeController extends Controller
{
	 public function index()
    {
    	$all_products = Product::all();
        $all_categories = Category::all();

        return view("Frontend/Home",['all_products' => $all_products , 'all_categories' => $all_categories]);
    }
    
    public function productDetail($id)
    {
    	$product = Product::find($id);

    	return view('Frontend/product_detail',["product" => $product]);
    }

    
}
