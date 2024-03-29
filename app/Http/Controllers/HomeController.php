<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;


class HomeController extends Controller
{


    public function index()
    { 
        
        $product=Product::paginate(8);
        return view('home.userpage',compact('product'));

    }



    public function product_details($id)
    {
        $product=Product::find($id);
        return view('home.product_details',compact('product'));
    }

 


    public function all_products()
    {
        $products = Product::all();
        return view('home.all_products', compact('products'));
    }


    public function stripe($totalprice)
{
    
    return view('home.stripe', compact('totalprice'));
}


  
public function stripePost(Request $request,$totalprice)
    {

        Stripe\Stripe::setApiKey(config('services.stripe.secret'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "MAD",
                "source" => $request->stripeToken,
                "description" => "Your payment has been confirmed and your order is now in the queue for shipping. Thank you for shopping with us!" 
        ]);
    

    $user = Auth::user();
        $userid = $user->id;

        $data = Cart::where('user_id', '=', $userid)->get();
        
         foreach($data as $data)
        {
            $order = new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='Paid';
            $order->delivery_status='processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }


    Session::flash('success', 'Payment successful!');
          
    return back();
}

    
}
