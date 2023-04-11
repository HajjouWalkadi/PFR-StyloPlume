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


    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
         else {
            $product=Product::paginate(10);
        return view('home.userpage',compact('product'));
         }
    }

    public function product_details($id)
    {
        $product=Product::find($id);
        return view('home.product_details',compact('product'));
    }

    // public function all_products($id)
    // {
    //     $product=Product::all($id);
    //     return view('home.all_products',compact('product'));
    // }


    public function all_products()
    {
        $products = Product::all();
        return view('home.all_products', compact('products'));
    }

// public function all_products()
// {
//     try {
//         $product = Product::all();
//         return view('home.all_products', compact('product'));
//     } catch (\Exception $e) {
//         dd($e->getMessage());
//     }
// }








    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            // return redirect()->back();
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

    public function cash_order()
    {
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

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }


        

        return redirect()->back()->with('message','We have received yor Order. We will contact you soon...'); 
        

    }

    public function stripe($totalprice)
{
    
    return view('home.stripe', compact('totalprice'));
}


// public function stripePost(Request $request,$totalprice)
// {
//     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

//     Stripe\Charge::create ([
        
//             "amount" => $totalprice * 100,
//             "currency" => "MAD",
//             "source" => $request->stripeToken,
//             "description" => "Your payment has been confirmed and your order is now in the queue for shipping. Thank you for shopping with us!" 
//     ]);
  
public function stripePost(Request $request,$totalprice)
    {
        dd('gi');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
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
