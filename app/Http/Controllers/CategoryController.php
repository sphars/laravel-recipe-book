<?php

namespace App\Http\Controllers;

use App\Category;
use App\Recipe;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoriesIndex(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function getCategory($id){
        $category = Category::where('id', '=', $id)->with('recipes')->first();
        return view('categories.category', ['category' => $category]);
    }

    # manage functions for category
    public function getCategoryManageIndex(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('manage.category.index', ['categories' => $categories]);
    }

    public function getCategoryManageNew(){
        return view('manage.category.new');
    }

    public function getCategoryManageEdit($id){
        $category = Category::where('id', '=', $id)->first();
        return view('manage.category.edit', ['category' => $category, 'categoryId' => $id]);
    }

    public function postCategoryManageNew(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        $category = new Category([
            'name' => $request->input('name')
        ]);

        $category->save();
        return redirect()->route('manage.category.index');
    }
}
