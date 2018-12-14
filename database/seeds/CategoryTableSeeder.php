<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category(['name' => 'Appetizer']);
        $cat->save();

        $cat = new Category(['name' => 'Mexican']);
        $cat->save();

        $cat = new Category(['name' => 'Dessert']);
        $cat->save();

        $cat = new Category(['name' => 'Italian']);
        $cat->save();

        $cat = new Category(['name' => 'Dinner']);
        $cat->save();

        $cat = new Category(['name' => 'Breakfast']);
        $cat->save();
    }
}
