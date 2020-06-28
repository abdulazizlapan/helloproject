@extends('include.master')
@section('title')
    <title>Hello Wallpaper | Product Detail</title>
@endsection
@section('content')

<div class="ps-page--product">
    <div class="ps-container">
        <div class="ps-page__container">
            <div class="ps-page__left">
                <div class="ps-product--detail ps-product--fullwidth">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="true">
                            <figure>
                                <div class="ps-wrapper">
                                    <div class="ps-product__gallery" data-arrow="true">
                                        <div class="item"><a href="img/products/detail/countdown/1.jpg"><img src="img/products/detail/countdown/1.jpg" alt=""></a></div>
                                        <div class="item"><a href="img/products/detail/countdown/2.jpg"><img src="img/products/detail/countdown/2.jpg" alt=""></a></div>
                                        <div class="item"><a href="img/products/detail/countdown/3.jpg"><img src="img/products/detail/countdown/3.jpg" alt=""></a></div>
                                        <div class="item"><a href="img/products/detail/countdown/4.jpg"><img src="img/products/detail/countdown/4.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </figure>
                            <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                <div class="item"><img src="img/products/detail/countdown/1.jpg" alt=""></div>
                                <div class="item"><img src="img/products/detail/countdown/2.jpg" alt=""></div>
                                <div class="item"><img src="img/products/detail/countdown/3.jpg" alt=""></div>
                                <div class="item"><img src="img/products/detail/countdown/4.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>Wallpaper a,b,c,d</h1>
                            
                            <h4 class="ps-product__price">$679.80</h4>
                            <div class="ps-product__desc">
                                <p> Sold By:<a class="mr-20" href="shop-default.html"><strong> YOUNG SHOP</strong></a> Status:<a href="shop-default.html"><strong class="ps-tag--in-stock"> In stock</strong></a></p>
                                <ul class="ps-list--dot">
                                    <li> Unrestrained and portable active stereo speaker</li>
                                    <li> Free from the confines of wires and chords</li>
                                    <li> 20 hours of portable capabilities</li>
                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                </ul>
                            </div>
                            <div class="ps-product__shopping">
                                <a class="ps-btn ps-btn--black" href="#">Pesan Sekrang</a>
                            </div>
                            <div class="ps-product__sharing"><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="content-video">
        <!-- Tempatkan Video Disini -->
       
            <h3>Video Tutorial Pemasangan</h3>
              <iframe width="560" height="415" src="https://www.youtube.com/embed/8iEgci-npU8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
</div>

    @stop
    @section('footer')
    @stop
