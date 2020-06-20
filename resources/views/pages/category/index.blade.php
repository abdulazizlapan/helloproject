@extends('layouts.admin-master')

@section('title')
Category
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Category</h1>
      <div class="section-header-button">
        <a href="features-post-create.html" class="btn btn-primary"><i class="fa fa-plus"></i></a>
      </div>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Category</a></div>
        <div class="breadcrumb-item">All Category</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Category</h2>
      <p class="section-lead">
        You can manage all CAtegory, such as editing, deleting and more.
      </p>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Category</h4>
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
                        <th>Category</th>
                        <th>Images</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}<td>
                            <td>{{ $row->foto }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
