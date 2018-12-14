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

        // category new (post) (manage.category.new)
        Route::post('new', [
            'uses' => 'CategoryController@postCategoryManageNew',
            'as' => 'new'
        ]);

        // category edit (get) (manage.category.edit)
        Route::get('edit/{id}', [
            'uses' => 'CategoryController@getCategoryManageEdit',
            'as' => 'edit'
        ]);

        // category edit (post) (manage.category.update)
        Route::post('edit', [
            'uses' => 'CategoryController@postCategoryManageEdit',
            'as' => 'update'
        ]);

        // category delete (get) (manage.category.delete)
        Route::get('delete/{id}', [
            'uses' => 'CategoryController@getCategoryManageDelete',
            'as' => 'delete'
        ]);
    });

    // recipe management pages
    Route::group(['prefix' => 'recipe', 'as' => 'recipe.'], function(){
        // recipe index (get) (manage.recipe.index)
        Route::get('/', [
            'uses' => 'RecipeController@getRecipeManageIndex',
            'as' => 'index'
        ]);

        // recipe new (get) (manage.recipe.new)
        Route::get('new', [
            'uses' => 'RecipeController@getRecipeManageNew',
            'as' => 'new'
        ]);

        // recipe new (post) (manage.recipe.new)
        Route::post('new', [
            'uses' => 'RecipeController@postRecipeManageNew',
            'as' => 'new'
        ]);

        // recipe edit (get) (manage.recipe.edit)
        Route::get('edit/{id}', [
            'uses' => 'RecipeController@getRecipeManageEdit',
            'as' => 'edit'
        ]);

        // recipe edit (post) (manage.recipe.update)
        Route::post('edit', [
            'uses' => 'RecipeController@postRecipeManageEdit',
            'as' => 'update'
        ]);

        // recipe delete (get) (manage.recipe.delete)
        Route::get('delete/{id}', [
            'uses' => 'RecipeController@getRecipeManageDelete',
            'as' => 'delete'
        ]);
    });



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
