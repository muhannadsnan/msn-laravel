@extends('layout.master')

@section('title', 'Category - all')

@section('content')
    {{session('message') ?? ''}}

    <h1>ALL PRODUCTS ({{ sizeof($data) }} found)</h1>

    <div class="create-product">
        <h4>NEW PRODUCT</h4>
        <form action="/products" method="POST">
            @csrf
            <label for="product-title">Title:</label>
            <input type="text" name="title" id="product-title" placeholder="Enter a title for product..">
            <label for="product-desc">Description:</label>
            <input type="text" name="desc" id="product-desc" placeholder="Enter a description for product..">
            <label for="product-price">Price:</label>
            <input type="text" name="price" id="product-price" placeholder="Enter a price for product..">
            <button type="submit">Save</button>
        </form>
    </div>

    <br><br>

    @if(sizeof($data) == 0)
        <h4>No products.</h4>
    @else
        @foreach($data as $product)
            <div class="product">
                
                <form action="/products/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')

                    ({{$product->id}}) {{$product->title}} <small>{{$product->updated_at}}</small>
                    <button type="submit">Delete</button>

                    <form action="/products/{{$product->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" placeholder="Change title...">
                        <input type="text" name="desc" placeholder="Change desc...">
                        <input type="text" name="price" placeholder="Change price...">
                        <button type="submit">Update</button> <br>
                        Description: {{$product->desc ?? '(empty)'}} <br>
                        Price: {{$product->price ?? '(empty)'}}
                    </form>
                </form>

            </div>
            <hr>
        @endforeach
    @endif
@stop