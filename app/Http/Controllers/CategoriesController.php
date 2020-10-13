<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

/* $ php artisan make:controller CategoriesController -r -m Category */

class CategoriesController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('cats.index', ['data' => $data]);
    }

    public function create()
    {
        echo __FUNCTION__;
    }

    public function store(Request $request)
    {
        echo __FUNCTION__;
    }

    public function show(Category $category)
    {
        echo __FUNCTION__;
    }

    public function edit(Category $category)
    {
        echo __FUNCTION__;
    }

    public function update(Request $request, Category $category)
    {
        echo __FUNCTION__;
    }

    public function destroy(Category $category)
    {
        echo __FUNCTION__;
    }
}
