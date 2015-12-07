<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TypeTableSeeder extends Seeder
{
    public function run()
    {
        \App\Type::create([
            'name' => 'Kitchen',
        ]);

    }
}
