@extends('layouts.admin-master')

@section('title')
Edit Product
@endsection

@section('css')
    <!-- include libraries(jQuery, bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('admin.index.product') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Edit Product</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Product</a></div>
        <div class="breadcrumb-item">Edit Product</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">EditProduct</h2>
      <p class="section-lead">
        On this page you can Edit a Product and fill in all fields.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Write Your Product</h4>
            </div>
            <form action="{{ Route('admin.update.product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="product_name" class="form-control" value="{{ $data->name }}">
                        <input type="hidden" name="product_id" class="form-control" value="{{ $data->id }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="category_id">
                           @foreach ($dataCategory as $rowCat)
                            <option value="{{$rowCat->id}}"
                                @if($rowCat->id == $data->category_id)
                                selected
                            @endif
                            >{{ $rowCat->name }}</option>
                           @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                        <textarea id="summernote" name="description">{{ $data->description }}</textarea>
                      </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="img_product[]" id="image-upload" multiple>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="number" name="price" value="{{ $data->price }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="status">
                            <option value="1"  @if($data->status == 1)
                                selected @endif>Actived</option>
                            <option value="0" @if($data->status == 0)
                                selected @endif>In Actived</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Update Product</button>
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

@section('scripts')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
  $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection
