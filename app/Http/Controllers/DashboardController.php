<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalproduct = Product::count();
        $totalcategories = Category::count();
        $totalbrand = Brand::count();
        return view('dashboard',compact('totalproduct','totalcategories','totalbrand'));


    }
}
