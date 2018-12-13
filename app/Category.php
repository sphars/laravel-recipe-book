<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class Category extends Model
{
    protected $fillable = ['name'];

    public function categories(){
        return $this->belongsToMany('Recipe', 'recipe_category', 'category_id', 'recipe_id')->withTimestamps();
    }
}
