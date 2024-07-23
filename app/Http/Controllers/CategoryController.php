<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
          $categories = Category::orderby('priority')->get();
    //    $categories = Category::all();
       return view('categories.index',compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(request$request)
    {
        $data = $request ->validate([
            'name'=>'required | string',
            'priority'=>'required | integer'
        ]);
        Category::create($data);
        return redirect()->route('categories.index')->with('success','Category Created Successfully.');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit',compact(('category')));
    }
    public function update(Request $request,$id)
    {
        $data=$request->validate([
            'name'=>'required | string',
            'priority'=>'required | integer'
        ]);
        $category=Category::find($id);
        $category->update($data);
        return redirect()->route('categories.index')->with('success','Category Updated Successfully.');
    }
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('success','Category Deleted Successfully.');
    }
}
