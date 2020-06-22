<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::get();
        return view('pages.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCategory = Category::get();
        // dd($dataCategory);
        return view('pages.product.add', compact('dataCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time().'.'.$extension;
        $file->move('assets/images/product/', $filename);

        product::Create([
            'name' => $request->name_product,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $filename,
            'price' => $request->price,
            'status' => $request->status

        ]);
        return redirect(route('admin.index.product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $data = Product::find($id);
        $image_path = $image_path = public_path().'/assets/images/product/'.$data->image;
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $data->delete();
        return redirect(route('admin.index.product'));
    }
}
