@extends('layouts.admin-master')

@section('title')
Add Product
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('admin.index.Product') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Create New Product</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Product</a></div>
        <div class="breadcrumb-item">Create New Product</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create New Product</h2>
      <p class="section-lead">
        On this page you can create a new Product and fill in all fields.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Write Your Product</h4>
            </div>
            <form action="{{ Route('admin.store.Product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="Product_name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="Product_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image_Product" id="image-upload">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="number" name="Product_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="Product_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Create Product</button>
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
