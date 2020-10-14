<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;


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
        //
    }

    public function store(Request $request)
    {
        $new = new Category();
        $new->title = $request->input('title');
        if($new->save()) $msg = 'Category created successfully!';
        else $msg = 'Could not create category';
        return redirect('/cats')->with('message', $msg);
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category, $id)
    {
        if(Category::find($id)->delete()){
            $msg = 'Category deleted.';
        }else{
            $msg = 'Could not delete category.';
        }
        return redirect('/cats')->with('message', $msg);
    }
}
