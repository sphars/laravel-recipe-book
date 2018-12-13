<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'author', 'description', 'ingredients', 'instructions'];
    protected $hidden = ['categories'];

    public function categories(){
        return $this->belongsToMany('App\Category', 'recipe_category', 'recipe_id', 'category_id')->withTimestamps();
    }
}
