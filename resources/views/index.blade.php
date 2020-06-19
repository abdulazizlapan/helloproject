@extends('includes.master')

@yield('title')

<title>Hello Wallpaper | Home</title>

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
    <div>
            <div>
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/x.jpg')}}" alt=""></a></div>
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/1.jpg')}}" alt=""></a></div>
                     <div class="ps-banner"><a href="#"><img  src="{{ asset('assets/data/img/slider/home-1/2.jpg')}}" alt=""></a></div>
                </div>
        </div>
        <br>
        <div id="homepage-1">
             <div class="ps-container">
                <h3 align="center">Selamat Datang</h3>
                <p align=" justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
             </div>
         </div>  

        <div class="ps-top-categories">
            <div class="ps-container">
                <h3>Kategori</h3>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/1.jpg')}}" alt="">
                            <p>Electronics</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/2.jpg')}}" alt="">
                            <p>Clothings</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/3.jpg')}}" alt="">
                            <p>Computers</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/4.jpg')}}" alt="">
                            <p>Home & Kitchen</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/5.jpg')}}" alt="">
                            <p>Health & Beauty</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/6.jpg')}}" alt="">
                            <p>Health & Beauty</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/7.jpg')}}" alt="">
                            <p>Jewelry & Watch</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="product.html"></a><img src="{{ asset('assets/data/img/categories/8.jpg')}}" alt="">
                            <p>Technology Toys</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    @section('footer')
    