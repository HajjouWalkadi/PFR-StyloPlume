<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order()
    {
        $order=Order::all();

        return view('admin.order',['order'=>$order]);
    }

    public function delivered($id)
    {
           
        $order=Order::find($id);
        $order->delivery_status="Delivered";
        $order->payment_status="Paid";
                                                                         
        $order->save();

        return redirect()->back();


    }
    
    // public function payment($id){
    //     $order= Order::find($id);
    //     $order->payment_status="Paid";

    //     $order->save();

    //     return redirect()->back();
    // }
}
