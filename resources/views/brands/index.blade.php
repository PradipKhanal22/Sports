@extends('layouts.app')
@section ('title') Brands
@endsection
@section('content')
<div class="text-right my-5">
    <a href="{{route('brands.create')}}" class="bg-indigo-800 text-white py-3 px-5 rounded-lg">Add Brand</a>

</div>
<table class="mt-5 w-full">
    <thead>
        <tr>
            <th class="border p-2 bg-cyan-500">S.N</th>
            <th class="border p-2 bg-cyan-500">Brand Name</th>
            <th class="border p-2 bg-cyan-500">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr class="text-center bg-gray-300">
            <td class="border p-2">{{$loop->iteration}}</td>
            <td class="border p-2">{{$brand->name}}</td>
            <td class="border p-2">
                <a href="{{route('brands.edit',$brand->id)}}" class="bg-indigo-500 text-white px-3 py-1.5  rounded-lg">Edit</a>
                <a href="{{route('brands.destroy',$brand->id)}}" class="bg-red-500 text-white px-3 py-1.5  rounded-lg" onclick="return confirm('Are you sure you want to delete')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
