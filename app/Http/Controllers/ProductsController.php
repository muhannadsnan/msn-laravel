<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $data = Product::all();
        return view('products.index', ['data' => $data]);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        if(empty($request->input('title'))){
            return redirect('/products')->with('message', 'Product title can not be empty.');
        }
        $new = new Product();
        $new->title = $request->input('title');
        $new->desc = $request->input('desc');
        $new->price = $request->input('price');
        if($new->save()) $msg = 'Product created successfully!';
        else $msg = 'Error when creating product';
        return redirect('/products')->with('message', $msg);
    }
    
    public function show(Product $product)
    {
        //
    }
    
    public function edit(Product $product)
    {
        //
    }
    
    public function update(Request $request, Product $product)
    {
        //
    }
    
    public function destroy(Product $product)
    {
        //
    }
}
