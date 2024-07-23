<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
      $brands = Brand::all();
      return view('brands.index', compact(('brands')));
    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        $data = $request ->validate([
            'name'=>'required | string'
        ]);
        Brand::create($data);
        return redirect()->route('brands.index')->with('success','Brand Created Successfully.');
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit',compact(('brand')));
    }
    public function update(Request $request,$id)
    {
        $data=$request->validate([
            'name'=>'required | string',
        ]);
        $brands=Brand::find($id);
        $brands->update($data);
        return redirect()->route('brands.index')->with('success','Brand Updated Successfully.');
    }
    public function destroy($id)
    {
        Brand::find($id)->delete();
        return redirect()->route('brands.index')->with('success','Brand Deleted Successfully.');
    }

}
