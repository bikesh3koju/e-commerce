<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function create(){
        return view('category.categoryCreate');
    }
    function index(){
        return view('category.categoryIndex');
    }
    function edit(){
        return view('category.categoryEdit');
    }
}
