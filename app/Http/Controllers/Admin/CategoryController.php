<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$all_categorys = Category::all();

    	return view("Admin/Category/view_categorys",["all_categorys" => $all_categorys]);
    }

    public function create()
    {
    	return view("Admin/Category/add_category");
    }

    public function store(Request $request)
    {

        $validateData = $request->validate(
            [
                'category_name' => 'required|max:225',
            ]
        );
  //   	$category_name = $request->category_name;

		// $add_category = Category::create([

		// 	'category_name' => $category_name,
		// 	'status' => "0",
		// ]);
        $add_category = Category::create($validateData);
		return redirect('view-categories');    	
    }

    public function destroy($id)
    {
    	$delete_category = Category::find($id);

    	$delete_category->delete();

    	return redirect('view-categories');
    }

    public function edit($id)
    {
        
    	$edit_category = Category::find($id);
        
        return view('Admin/Category/edit_category',["edit_category" => $edit_category]);
    }

    public function update(Request $request,$id)
    {
    	$update_category = Category::where('id',$id)->update([

    		'category_name' => $request->category_name,
    	]);

    	

    	return redirect('view-categories');
    }
}
