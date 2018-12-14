<?php

use Illuminate\Database\Seeder;
use App\Recipe;
use App\Category;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        $recipe = new Recipe([
            'title' => "Easy Queso Dip",
            'author' => "Spencer Harston",
            'description' => "The easiest queso dip recipe you will ever need.",
            'ingredients' => "16 oz. Velveeta\n1 can Rotel Tomatoes",
            'instructions' => "Add Velveeta cheese and Rotel tomatoes to a pot and heat on stove.\nStir over medium heat for 5 minutes until cheese is melted and well-combined.\nRemove from heat (or turn to low) and serve warm with tortilla chips."
            ]);
        $recipe->save();
        $recipe->categories()->sync([1, 2]);

        $recipe = new Recipe([
            'title' => "Chewy Chocolate Cookies",
            'author' => "Mrs. Fields",
            'description' => "Delicious chocolate cookies with chocolate chips.",
            'ingredients' => "1 1/4 cups Butter\n2 cups Sugar\n2 Eggs\n 2 tsp. Vanilla Extract\n2 cups All-purpose Flour\n3/4 cups Cocoa\n1 tsp. Baking Soda\n1/2 tsp. Salt\n2 cups (12 oz. pkg.) Semi-Sweet Chocolate Chips",
            'instructions' => "Heat oven to 350 degrees.\nIn large mixer bowl; cream butter and sugar until light and fluffy.\nAdd eggs and vanilla; beat well.\nCombine flour, cocoa, baking soda and salt; gradually blend into creamed mixture. Stir in peanut butter or chocolate chips.\nDrop by teaspoonfuls onto ungreased cookie sheet. Bake 8-9 minutes. (Do not overbake; cookies will be soft. They will puff while baking and flatten while cooling.).\nCool slightly; remove from cookie sheet onto wire rack. Cool completely."
            ]);
        $recipe->save();
        $recipe->categories()->sync([3]);

        $recipe = new Recipe([
            'title' => "Mom's Spaghetti Sauce",
            'author' => "Mom",
            'description' => "Better than any jar you can buy.",
            'ingredients' => "2 lbs. Hamburger\n1 can Tomato Soup\n1 can Cream of Mushroom Soup\n2 8 oz. cans tomato sauce\n1 can Diced Tomatoes\n1 pkg. Spaghetti Sauce Mix\n2 tbsp. Worcestershire Sauce\n1 med. Onion\n2 cubes Beef Bouillon\n1 bay leaf",
            'instructions' => "Dice onion and cook with hamburger until browned and onion is translucent. Drain hamburger.\nAdd rest of ingredients and simmer for 15-20 minutes. Add water (from pasta) for desired thickness if necessary.\nRemove bay leaf before serving warm over pasta."
            ]);
        $recipe->save();
        $recipe->categories()->sync([4, 5]);

        $recipe = new Recipe([
            'title' => "Luft-Waffles",
            'author' => "Alton Brown",
            'description' => "Light and fluffy goodness for your breakfast.",
            'ingredients' => "2 cups All-purpose flour\n1 tsp. Baking powder\n1/2 tsp. Baking soda\n1 tsp. Salt\n4 tbsp. Unsalted butter, melted and cooled\n3 large eggs\n2 cups Buttermilk (room temperature)\n3 tbsp. Sugar",
            'instructions' => "Coat waffle iron with nonstick cooking spray and preheat it.\nSift together the dry ingredients.\nWhisk the butter and eggs, then mix remainder of wet ingredients.\nSet batter aside for 5 minutes (or refrigerate up to an hour).\nLadle 2 scoops of batter onto waffle iron and spread lightly.\nClose iron and cook until waffle is golden and crisp on both sides.\nServe with plenty of butter and maple syrup.",
            ]);
        $recipe->save();
        $recipe->categories()->sync([6]);

        $recipe = new Recipe([
            'title' => "Libby's Pumpkin Pie",
            'author' => "Libby",
            'description' => "The tried and true best pumpkin pie recipe, from Libby herself.",
            'ingredients' => "3/4 cup granulated sugar (start with 1/2 cup then add to taste)\n1 tsp. ground cinnamon\n1/2 tsp. salt\n1/2 tsp. ground ginger\n1/4 tsp. ground cloves\n1/2 tsp. pumpkin spice\n2 large eggs\n1 can (15 oz.) LIBBY'S® 100% Pure Pumpkin\n1 can (12 fl. oz.) Evaporated Milk\n1 unbaked 9-inch (4-cup volume) deep-dish pie shell\nWhipped cream (optional)",
            'instructions' => "Mix sugar, cinnamon, salt, ginger and cloves in small bowl. Beat eggs in large bowl. Stir in pumpkin and sugar-spice mixture. Gradually stir in evaporated milk.\n(Optional) Blind bake the pie shell for 15 minutes.\nPour mixture into pie shell.\nBake in preheated 425° F oven for 15 minutes. Reduce temperature to 350° F; bake for 40 to 50 minutes or until knife inserted near center comes out clean.\nCool on wire rack for 2 hours. Serve immediately or refrigerate.\nTop with whipped cream before serving."
        ]);
        $recipe->save();
        $recipe->categories()->sync([3]);
    }
}
