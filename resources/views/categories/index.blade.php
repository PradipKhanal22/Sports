@extends('layouts.app')
@section ('title') Category
@endsection
@section('content')
<div class="text-right my-5">
    <a href="{{route('categories.create')}}" class="bg-indigo-800 text-white py-3 px-5 rounded-lg">Add Category</a>

</div>
<table class="mt-5 w-full">
    <thead>
        <tr>
            <th class="border p-2 bg-cyan-500">S.N</th>
            <th class="border p-2 bg-cyan-500">Category Name</th>
            <th class="border p-2 bg-cyan-500">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr class="text-center bg-gray-300">
            <td class="border p-2">{{$category->priority}}</td>
            <td class="border p-2">{{$category->name}}</td>
            <td class="border p-2">
                <a href="{{route('categories.edit',$category->id)}}" class="bg-indigo-500 text-white px-3 py-1.5  rounded-lg">Edit</a>
                <a href="{{route('categories.destroy',$category->id)}}" class="bg-red-500 text-white px-3 py-1.5  rounded-lg" onclick="return confirm('Are you sure you want to delete')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection