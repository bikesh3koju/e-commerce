<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function create(){
        return view('category.categoryCreate');
    }
}
