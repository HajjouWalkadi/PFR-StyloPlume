<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $product = Product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;

            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
            }else{
                $cart->price=$product->price * $request->quantity;
            }
            
            $cart->image=$product->image;
            $cart->product_id=$product->id;

            $cart->quantity=$request->quantity;
            $cart->save();

            $product->update(['quantity'=> $product->quantity - $request->quantity]);

            return redirect()->back();

        }
        else{
            return redirect('login');
        }
    }



    public function cart()
    {

        if(Auth::id())
        {

            $id=Auth::user()->id;
            $carts = Cart::where('user_id', '=', $id)->get();
            // $carts=Cart::All();
            return view('home.cart',['carts'=>$carts]);
        }

        else{
            return redirect('login');
        }
       
    }


    public function retire_cart($id)
    {
        $carts= Cart::find($id);

        $carts->delete();

        return redirect()->back();

    }



    // public function CartCount($user_id)
    // {
    //     $productNum = Product::with('product')
    //         ->whereHas('product', function($query) use ($user_id) {
    //             $query->where('user_id', $user_id)
    //                 ->where('status', NULL);
    //         })->count();

    //     return $productNum;
    // }
}
