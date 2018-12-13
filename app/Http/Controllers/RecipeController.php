<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Category;
use Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //site home page
    public function getIndex(){
        $totalRecipes = Recipe::all()->count(); //get amount of recipes
        $randId = rand(1, $totalRecipes); //pick random id
        $recipe = Recipe::find($randId);
        return view('index', ['recipe' => $recipe]);
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
