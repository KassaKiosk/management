<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        \App\Category::create([
            'name' => 'Drinks',
            'visible' => true,
        ]);
        \App\Category::create([
            'name' => 'Burgers',
            'visible' => true,
            'sort' => 2,
        ]);
        \App\Category::create([
            'name' => 'Pizzas',
            'visible' => true,
            'sort' => 1,
        ]);
    }
}
