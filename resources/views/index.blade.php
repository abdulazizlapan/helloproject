@extends('includes.master')
@section('title')
    <title>Hello Wallpaper | Home</title>
@endsection
@section('content')
     <div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Home</li>
                </ul>
            </div>
        </div>
    </div>
    <br>
        <div>
            <div>
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true"
                data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1"
                data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                data-owl-duration="1000" data-owl-mousedrag="on">
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/1.jpg')}}" alt=""></a></div>
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/1.jpg')}}" alt=""></a></div>
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/2.jpg')}}" alt=""></a></div>
                </div>
        </div>
        <br>
        <div id="homepage-1">
             <div class="ps-container">
                <h3 align="center">Selamat Datang</h3>
                <p align=" justify">a
                </p>
             </div>
         </div>

        <div class="ps-top-categories">
            <div class="ps-container">
                <h3>Kategori</h3>
                <div class="row">
                    @foreach ($dataCategory as $row)
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                            <div class="ps-block--category">
                                <a class="ps-block__overlay" href="#"></a>
                                <img src="{{ asset('assets/images/category/'.$row->foto)}}" alt="">
                                <p>{{ $row->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @stop

@section('footer')
@stop