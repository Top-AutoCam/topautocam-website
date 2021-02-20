<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TOP AUTO CAM</title>

    <link rel="stylesheet" href="{{asset('css/floicons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <script src="{{asset('js/jquery.min.js')}}" />
    </script>
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    @livewireStyles
</head>

<body class="archive woocommerce woocommerce-page">

    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
    <!-- End Preloader -->

    <div id="wrapper" class="site-wrapper">

        <div class="uk-offcanvas-content">

            @include('front.partials.header')
            
            <div id="content" class="site-content">

            @yield('content')

            </div>
            
            @include('front.partials.footer')

            <div id="mobile-menu" data-uk-offcanvas="overlay: true">
                <div class="inner uk-offcanvas-bar">

                    @include('front.partials.mobile_header')

                    <div class="content">
                        <ul class="mobile-nav uk-nav-default uk-nav-parent-icon" data-uk-nav="">
                            <li class="uk-parent">
                                <a href="#">Features</a>
                                <ul data-uk-nav="">
                                    <li class="uk-parent">
                                        <a href="#">Home Layouts</a>
                                        <ul>
                                            <li><a href="index.html">Multi Layouts</a></li>
                                            <li><a href="home-magazine.html">Magazine Layout</a></li>
                                            <li><a href="home-classic.html">Classic Layout</a></li>
                                            <li><a href="#">Grid Layout</a>
                                                <ul>
                                                    <li><a href="home-grid-2cols.html">2 Columns</a></li>
                                                    <li><a href="home-grid-3cols.html">3 Columns</a></li>
                                                    <li><a href="home-grid-4cols.html">4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Masonry Layout</a>
                                                <ul>
                                                    <li><a href="home-masonry-2cols.html">2 Columns</a></li>
                                                    <li><a href="home-masonry-3cols.html">3 Columns</a></li>
                                                    <li><a href="home-masonry-4cols.html">4 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#">Featured Slider</a>
                                        <ul>
                                            <li><a href="slider-modern.html">Modern</a></li>
                                            <li><a href="slider-full.html">Full Width</a></li>
                                            <li><a href="slider-boxed.html">Boxed Width</a></li>
                                            <li><a href="#">Grid Layout</a>
                                                <ul>
                                                    <li><a href="slider-grid-2cols.html">2 Columns</a></li>
                                                    <li><a href="slider-grid-3cols.html">3 Columns</a></li>
                                                    <li><a href="slider-grid-4cols.html">4 Columns</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#">Post Templates</a>
                                        <ul>
                                            <li><a href="single.html">Full Post</a></li>
                                            <li><a href="single-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="uk-parent">
                                        <a href="#">Page Templates</a>
                                        <ul>
                                            <li><a href="page-author.html">Author Page</a></li>
                                            <li><a href="page-category.html">Category Page</a></li>
                                            <li><a href="page-archive.html">Archive Page</a></li>
                                            <li><a href="page-error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#">Categories</a>
                                <ul data-uk-nav="">
                                    <li><a href="#">Life Style</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Make Up</a></li>
                                    <li><a href="#">Beauty</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="shop.html">Shop</a>
                                <ul data-uk-nav="">
                                    <li class="uk-parent"><a href="shop.html">Products Listing</a>
                                        <ul>
                                            <li><a href="shop-full.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-product.html">Simple Product</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                    <li><a href="shop-account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">About</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- End Off Canvas Sidebar -->

        </div>
        <!-- End Off Canvas Content -->

    </div>
    <!-- End Wrapper -->

    @livewireScripts
</body>

</html>