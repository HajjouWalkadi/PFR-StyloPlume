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
        $totalUser = User::where('usertype','0')->count();
        $totalAdmin = User::where('usertype','1')->count();
        $order = Order::all();
        $totalRevenue = 0;
        foreach($order as $order)
        {
            $totalRevenue = $totalRevenue + $order->price; 
        }

        // $test = 12;
        // dd($totalProducts);

        // return view('redirect', compact('totalProducts'));
        // return redirect()->(['total_products' => $totalProducts]);
        // return redirect()->route('productStatistics', ['total_products' => $totalProducts]);



        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home', compact('totalProducts','totalCategories','totalOrder','totalUsers','totalUser','totalAdmin','totalRevenue'));
        }
        else {
            // $product=Product::paginate(10);
            return redirect()->route('home');
        }

    }

}
