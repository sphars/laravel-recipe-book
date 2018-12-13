<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'RecipeController@getIndex',
    'as' => 'home'
]);

Route::get('about', function(){
    return view('other.about');
})->name('about');

// Recipes index page
Route::get('recipes', [
    'uses' => 'RecipeController@getRecipesIndex',
    'as' => 'recipes.index'
]);

// Single recipe
Route::get('recipe/{id}', [
    'uses' => 'RecipeController@getRecipe',
    'as' => 'recipes.recipe'
]);
