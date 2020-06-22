<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(Request $request){
        $dataCategory = Category::get();
        // dd($dataCategory);
        return view('index', compact('dataCategory'));
    }
}
