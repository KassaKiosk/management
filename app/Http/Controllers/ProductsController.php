<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Retrieve all categories with their products
     *
     * @return mixed
     */
    public function index()
    {
        return Category::with(['products' => function($q) {
            $q->select([
                'products.id',
                'category_id',
                'name',
                'price',
                'visible',
                'sort',
                'category_id_sub'
            ]);
            $q->orderBy('sort');
        }])->orderBy('sort')->get();
    }

    public function test()
    {
        return 'hello world';
    }
}
