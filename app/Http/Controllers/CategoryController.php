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
    
}
