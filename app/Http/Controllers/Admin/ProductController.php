<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
    	$all_products = Product::all();

    	return view("Admin/Product/view_products")->with('all_products',$all_products);
    }

    public function create()
    {
    	$all_categorys = Category::all();

    	return view("Admin/Product/add_product")->with('all_categorys',$all_categorys);
    }

    public function store(Request $request)
    {
    	$product_name = $request->product_name;
    	$product_category = $request->product_category;
    	$product_price = $request->product_price;
    	$product_description = $request->product_description;
    	$image1 = $request->image1;
// Image Upload
        if($request->hasFile('image1'))
        {
            $image1 = $request->file("image1");
            $image1->move("backend/productImages",$image1->getClientOriginalName());
        }
// Store Data
        $add_product = Product::create([

			'product_name' => $product_name,
			'category' => $product_category,
			'price' => $product_price,
			'description' => $product_description,
			'image' => $image1,
			'status' => "0",
		]);

		return redirect('view-products');    	
    }

    public function destroy($id)
    {
    	$delete_product = Product::where('id',$id);

    	$delete_product->delete();

    	return redirect('view-products');
    }

    public function edit($id)
    {
        $edit_product = Product::find($id);

        $all_categorys = Category::all();
        
        return view('Admin/Product/edit_product',["edit_product" => $edit_product,"all_categorys" => $all_categorys]);
    }
    public function update(Request $request,$id)
    {
        $update_product = Product::where('id',$id)->update([

            'product_name' => $request->product_name,
            'price' => $request->product_price,
            'description' => $request->product_description,
            'category' => $request->product_category,

        ]);

        

        return redirect('view-products');
    }
}
