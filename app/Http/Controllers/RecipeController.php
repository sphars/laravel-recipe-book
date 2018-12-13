<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Category;
use Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //home page
    public function getIndex(){
        return view('index');
    }

    public function getRecipesIndex(){
        $recipes = Recipe::orderBy('title', 'asc')->paginate(3);
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function getRecipe($id){
        $recipe = Recipe::where('id', '=', $id)->with('categories')->first();
        return view('recipes.recipe', ['recipe' => $recipe]);
    }

}