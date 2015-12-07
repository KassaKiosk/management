<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StationsController extends Controller
{
    public function index()
    {
        return Station::with(['products' => function($q) {
            $q->select('id');
            $q->orderBy('sort');
        }])->get();
    }
}
