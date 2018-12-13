<?php

namespace App\Http\Controllers;

use App\Category;
use App\Recipe;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoriesIndex(){
        $categories = Category::orderBy('name', 'asc')->paginate();
        return view('categories.index', ['categories' => $categories]);
    }

    public function getCategory($id){
        $category = Category::where('id', '=', $id)->with('recipes')->first();
        return view('categories.category', ['category' => $category]);
    }
}
