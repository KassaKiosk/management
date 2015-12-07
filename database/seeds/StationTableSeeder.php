<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class StationTableSeeder extends Seeder
{
    public function run()
    {
        $station = \App\Station::create([
            'name' => 'Pizza Oven',
            'color' => 'D4B46A',
            'type_id' => 1,
        ]);

        $product = \App\Product::find(6);

        $station->products()->save($product);

    }
}
