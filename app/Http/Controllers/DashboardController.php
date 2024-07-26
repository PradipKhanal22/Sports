<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalproduct = Product::count();
        $totalcategories = Category::count();
        $totalbrand = Brand::count();
        $totalorders = Order::count();
        $pendingorders = Order::where('status','Pending')->count();
        $processingorders = Order::where('status','Processing')->count();
        $deliveredorders = Order::where('status','Delivered')->count();
        return view('dashboard',compact('totalproduct','totalcategories','totalbrand','totalorders','pendingorders','processingorders','deliveredorders'));
    }
}
