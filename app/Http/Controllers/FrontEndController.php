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

    public function indexproduct(Request $request,$id){
       $dataCategory= Category::get($id);
        $datProduct = Product::get();
       return view('/product', compact('datProduct','dataCategory'));
    }
    public function indexprodetail(Request $request,$id){
        $dataCategory= Category::get($id);
         $data = Product::get();
        return view('/productdetail', compact('data','dataCategory'));
     }
}
