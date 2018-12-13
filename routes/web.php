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

// Categories index page
Route::get('categories', [
    'uses' => 'CategoryController@getCategoriesIndex',
    'as' => 'categories.index'
]);

// Single category
Route::get('category/{id}', [
    'uses' => 'CategoryController@getCategory',
    'as' => 'categories.category'
]);

Route::group(['prefix' => 'manage', 'as' => 'manage.'], function(){
    // manage index page
    // called by route('manage.index')
    Route::get('/', [
        'uses' => 'ManageController@getManageIndex',
        'as' => 'index'
    ]);

    // category management pages
    Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
        // category index (get) (manage.category.index)
        Route::get('/', [
            'uses' => 'CategoryController@getCategoryManageIndex',
            'as' => 'index'
        ]);

        // category new (get) (manage.category.new)
        Route::get('new', [
            'uses' => 'CategoryController@getCategoryManageNew',
            'as' => 'new'
        ]);

        // category edit (get) (manage.category.edit)
        Route::get('edit/{id}', [
            'uses' => 'CategoryController@getCategoryManageEdit',
            'as' => 'edit'
        ]);
    });


});
