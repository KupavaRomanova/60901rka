

@extends('layout')

@section('content')
    <h1>{{ $category->category_name }}</h1>

    <p>ID: {{ $category->id }}</p>
    <p>Created at: {{ $category->created_at }}</p>
    <p>Updated at: {{ $category->updated_at }}</p>

    <h2>Products</h2>
    <ul>
        @foreach($category->products as $product)
            <li>{{ $product->product_name }}</li>
        @endforeach
    </ul>
    @endsection
