<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['recipes'];

    public function recipes(){
        return $this->belongsToMany('App\Recipe', 'recipe_category', 'category_id', 'recipe_id')->withTimestamps();
    }
}
