<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe = new Recipe([
            'title' => 'Easy Queso Dip',
            'author' => 'Spencer Harston',
            'description' => 'The easiest queso dip recipe you will ever need.',
            'ingredients' => '16 oz. Velveeta*1 can Rotel Tomatoes',
            'instructions' => 'Add Velveeta cheese and Rotel tomatoes to a pot and heat on stove.*Stir over medium heat for 5 minutes until cheese is melted and well-combined.*Remove from heat (or turn to low) and serve warm with tortilla chips.'
            ]);
        $recipe->save();
        $recipe->categories()->sync([1, 2]);
    }
}
