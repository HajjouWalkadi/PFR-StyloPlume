<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    


    public  function index(){
        $product = Product::all();  
        return view('home.product', ['product'=>$product]);
    }


    public function view_product()
    {
        $category=Category::all();
        return view('admin.product',compact('category'));
    }





    public function add_product(ProductRequest $request ) 
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->category_id=$request->category;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;


        $product->save();
        
        return redirect()->back()->with('message','Product Added Successfully');

    }

    

    public function show_product()
    {
        $product= Product::all();
        return view('admin.show_product',compact('product'));
    }


    public function delete_product($id)
    {
      $product = Product::find($id); 

      $product->delete();

      return redirect()->back()->with('message','product deleted successfully');
    }


    public function update_product($id)
    {
        $product=Product::find($id);
        $category=Category::all();
        
        return view('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product=Product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->category_id = $request->category_id;
        $product->quantity=$request->quantity;

        $image=$request->image;
        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image=$imagename;

        }
        

        $product->save();

        return redirect()->back()->with('message','Product updated successfully');


    }

    
    public function FilterByCategory($category){
          $cat = Category::where('category_name','=',$category)->first();
          $product = Product::where('category_id','=',$cat->id)->get();

        return view('home.product', ['product'=>$product]);
    }
}
