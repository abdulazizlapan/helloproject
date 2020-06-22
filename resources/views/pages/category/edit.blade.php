@extends('layouts.admin-master')

@section('title')
Edit Category
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('admin.index.category') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Edit Category</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Category</a></div>
        <div class="breadcrumb-item">Edit Category</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Edit Category</h2>
      <p class="section-lead">
<<<<<<< HEAD
        On this page you can Edit a  Category and fill in all fields.
      </p>

=======
        On this page you can EDIT a  Category and fill in all fields.
      </p>
      
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Write Your Category</h4>
            </div>
<<<<<<< HEAD
            <form action="{{ Route('admin.store.category') }}" method="POST" enctype="multipart/form-data">
                @csrf
=======
            <form action="{{ Route('admin.update.category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
<<<<<<< HEAD
                        <input type="text" name="category_name" class="form-control">
=======
                      <input type="text" name="category_name"  class="form-control" value="{{ $data->name }}">
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
<<<<<<< HEAD
                          <input type="file" name="image_category" id="image-upload">
=======
                          <input type="file" name="image_category"  id="image-upload">
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
<<<<<<< HEAD
                        <button class="btn btn-primary" type="submit">Create Category</button>
=======
                        <button class="btn btn-primary" type="submit">Update  Category</button>
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
                      </div>
                    </div>
                  </div>

            </form>

<<<<<<< HEAD

=======
>>>>>>> c95bffe3e1b33c8321c706d28dee3a53f20d8ee2
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
