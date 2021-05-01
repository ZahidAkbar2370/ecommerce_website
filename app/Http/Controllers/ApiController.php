<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Category;

class ApiController extends Controller
{
    public function api()
    {

        $products =Http::get('https://fakestoreapi.com/products')->json();
        $categorys =Http::get('https://fakestoreapi.com/products/categories')->json();



        foreach ($products as $key => $value) {

            $checkcount=Product::where('id',$value['id'])->count();
            
            if($checkcount>0)   
            {
                $product = Product::where('id',$value['id'])->update([

                    'product_name' => $value['title'],
                    'category' => $value['category'],
                    'price' => $value['price'],
                    'description' => $value['description'],
                    'image' => $value['image'],
                ]);
            }
            else 
            {
                
                $product = Product::create([

                    'product_name' => $value['title'],
                    'category' => $value['category'],
                    'price' => $value['price'],
                    'description' => $value['description'],
                    'image' => $value['image'],
                ]);
            }

        }

        foreach ($categorys as $key => $category) {
            
            $checkcount=Category::where('category_name',$category)->count();
            
            if($checkcount>0)   
            {
                $save_category = Category::where('category_name',$category)->update([

                'category_name' => $category,
                'status' => '1',
                ]);
            }
            else
            {
                $save_category = Category::create([

                'category_name' => $category,
                'status' => '1',
                ]);
            }
                

        }

        return redirect('index');
    	 
    }

}
