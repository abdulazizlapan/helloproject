<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::get();
        return view('pages.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image_category');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time().'.'.$extension;
        $file->move('assets/images/category/', $filename);

        Category::Create([
            'name' => $request->category_name,
            'foto' => $filename
        ]);
        return redirect(route('admin.index.category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Category::where('id', $id)->first();
        return view('pages.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $data =  Category::where('id', $request->id)->first();

        if (isset($request->image_category)) {

            $file = $request->file('image_category');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time().'.'.$extension;
            $file->move('assets/images/category/', $filename);
            $data->foto = $filename;
        }
        $data->name = $request->category_name;
        $data->save();
        return redirect(route('admin.index.category'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $image_path = $image_path = public_path().'/assets/images/category/'.$data->foto;
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $data->delete();
        return redirect(route('admin.index.category'));
    }
}
