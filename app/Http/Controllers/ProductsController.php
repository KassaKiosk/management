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
            $q->orderBy('sort');
        }])->orderBy('sort')->get();
    }
}
