<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function view_category(){
        
        $data=Category::all();
        return view('admin.category',compact('data'));
    }
    
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }
}
