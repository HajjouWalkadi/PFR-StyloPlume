<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Carbon;

class ProductStatisticsController extends Controller
{
        public function index(){

  

        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalOrder = Order::count();
        $totalUsers = User::count();
        $order = Order::all();
        $totalRevenue = 0;
        foreach($order as $order)
        {
            $totalRevenue = $totalRevenue + $order->price; 
        }

        $totalDelivered = Order::where('delivery_status','=','delivered')->get()->count();
        $totalProcessing = Order::where('delivery_status','=','processing')->get()->count();
        



        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home', compact('totalProducts','totalCategories','totalOrder','totalUsers','totalRevenue','totalDelivered','totalProcessing'));
        }
        else {
            return redirect()->route('home');
        }

    }

}
