@extends('layouts.admin-master')

@section('title')
Product
@endsection

@section('css')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Product</h1>
      <div class="section-header-button">
        <a href="{{ route('admin.add.product') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Product</a></div>
        <div class="breadcrumb-item">All Product</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Product</h2>
      <p class="section-lead">
        You can manage all Product, such as editing, deleting and more.
      </p>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Product</h4>
            </div>
            <div class="card-body">
              <div class="float-left"></div>
              <div class="float-right">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="clearfix mb-3"></div>

              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                      <tr>
                        <th>No</th>
                        <th>Name Product</th>
                        <th>Category</th>
                        <th>Descrition</th>
                        <th>Images</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->category_id }}</td>
                            <td>
                              {{ str_limit($row->description , $limit = 90, $end = '...') }} 
                              
                            </td>
                            <td>
                              {{$row->imagegit}}
                            </td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                <a href="{{ route('admin.edit.product', ['id'=>$row->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="{{ Route('admin.delete.product', ['id'=>$row->id])}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
              <div class="float-right">
                <nav>
                  <ul class="pagination">
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  <!-- JS Libraies -->
  <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
@endsection
