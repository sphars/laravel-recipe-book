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
        $recipes = Recipe::orderBy('title', 'asc')->paginate(6);
        return view('recipes.index', ['recipes' => $recipes]);
    }

    public function getRecipe($id){
        $recipe = Recipe::where('id', '=', $id)->with('categories')->first();
        return view('recipes.recipe', ['recipe' => $recipe]);
    }

    // GET manage functions for recipe
    // index
    public function getRecipeManageIndex(){
        $recipes = Recipe::orderBy('created_at', 'desc')->paginate(6);
        return view('manage.recipe.index', ['recipes' => $recipes]);
    }

    // new
    public function getRecipeManageNew(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('manage.recipe.new', ['categories' => $categories]);
    }

    // edit
    public function getRecipeManageEdit($id){
        $recipe = Recipe::where('id', '=', $id)->first();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('manage.recipe.edit', ['recipe' => $recipe, 'recipeId' => $id, 'categories' => $categories]);
    }

    // delete
    public function getRecipeManageDelete($id){
        $recipe = Recipe::find($id);
        $recipe->recipes()->detach();
        $recipe->delete();
        return redirect()->route('manage.recipe.index')->with('info', 'Recipe ' . $recipe->name . ' deleted.');
    }

    // POST functions
    // create
    public function postRecipeManageNew(Request $request){
        $this->validate($request,[
            'title' => 'required|min:1',
            'author' => 'required|min:2',
            'description' => 'required|min:10',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]);
        $recipe = new Recipe([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'ingredients' => $request->input('ingredients'),
            'instructions' => $request->input('instructions')
        ]);
        $recipe->save();
        $recipe->categories()->attach($request->input('categories') === null ? [] : $request->input('categories'));
        return redirect()->route('manage.recipe.index')->with('info', 'Recipe ' . $recipe->title . ' created.');
    }

    // update
    public function postRecipeManageEdit(Request $request){
        $this->validate($request, [
            'title' => 'required|min:1',
            'author' => 'required|min:2',
            'description' => 'required|min:10',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]);

        $recipe = new Recipe();
        $recipe = Recipe::find($request->input('id'));
        $recipe->title = $request->input('title');
        $recipe->author = $request->input('author');
        $recipe->description = $request->input('description');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->instructions = $request->input('instructions');
        $recipe->categories()->sync($request->input('categories') === null ? [] : $request->input('categories'));

        $recipe->save();
        return redirect()->route('manage.recipe.index')->with('info', 'Recipe ' . $recipe->title . ' updated.');
    }
}
