@extends('includes.master')
@section('title')
    <title>Hello Wallpaper | Product </title>
@endsection
@section('content')
    <div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>

        <div class="ps-top-categories">
            <div class="ps-container">
                @foreach ($dataCategory as $row)
                <h3>{{ $row->name }}</h3>
                @endforeach
                <div class="row">
                    @foreach ($dataProduct as $pro)
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category">
                            <a class="ps-block__overlay" href="#"></a>
                            <img src="{{ asset('assets/images/product/'.$pro->foto)}}" alt="">
                            <p>{{ $pro->name }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    
        

    @section('footer')

