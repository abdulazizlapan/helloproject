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
        On this page you can EDIT a  Category and fill in all fields.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Write Your Category</h4>
            </div>
            <form action="{{ Route('admin.update.category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="text" name="category_name"  class="form-control" value="{{ $data->name }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image_category"  id="image-upload">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Update  Category</button>
                      </div>
                    </div>
                  </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
