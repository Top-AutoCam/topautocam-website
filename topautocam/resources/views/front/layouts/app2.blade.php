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

</head>

<body class="archive woocommerce woocommerce-page">

    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>

    <div id="wrapper" class="site-wrapper">

        <div class="uk-offcanvas-content">

            @include('front/partials/header')
           
            <div id="content" class="site-content">

                @include('front/partials/announcements')

                <div id="primary" class="site-primary">
                    <div class="uk-container">

                        <div class="page-heading">
                            <div class="uk-container">

                                <div class="inner uk-position-relative">
                                    <div>
                                        <h4 class="title uk-h2">Featured</h4>
                                    </div>
                                    <div>

                                        @include('front/partials/breadcrumb')

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Heading -->

                        <div class="uk-grid" data-uk-grid="">
                            <div class="uk-width-expand">
                                <main id="main" class="site-main">


                                    @include('front/partials/featured')

                                    <nav class="woocommerce-pagination">
                                        <ul class="page-numbers">
                                            <li>
                                                <span aria-current="page" class="page-numbers current">1</span>
                                            </li>
                                            <li>
                                                <a class="page-numbers" href="#page2">2</a>
                                            </li>
                                            <li>
                                                <a class="next page-numbers" href="#page2">→</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- End Pagination -->

                                </main>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Primary -->

                <div id="newsletter" class="site-newsletter">
                    <div class="uk-container">
                        <div class="inner uk-position-relative">
                            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-auto@m">
                                    <h4>JOIN US TODAY!</h4>
                                    <p>Receive the latest posts via email.</p>
                                </div>
                                <form class="form-container uk-width-expand@m" action="/">
                                    <div class="form-group">
                                        <input type="text" class="uk-input" name="fullname" placeholder="Full Name" />
                                        <input type="email" class="uk-input" name="email" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="uk-button uk-button-secondary" value="Subscribe" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Newsletter -->

            </div>
            <!-- End Content -->

            <footer id="footer" class="site-footer">
                <div class="uk-container">
                    <div class="inner uk-position-relative">
                        <div class="widget instagram-feeds" id="instagram-footer">
                            <h2 class="title uk-h4">
                                <span>Follow us <a href="#">@Instagram</a></span>
                            </h2>
                            <div class="widget-content">
                                <ul class="uk-grid-small uk-child-width-1-3 uk-child-width-1-3@s uk-child-width-expand@m uk-grid" data-uk-grid="">
                                    <li class="uk-first-column">
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/01.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>782</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/02.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>1.5k</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/03.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>2.7k</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/04.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>3.1k</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/05.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>782</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <span class="image cover-image ratio-square" data-src="assets/images/instagram/06.jpg" data-uk-img="" title="Post Title"></span>
                                            <a class="cover-link" href="#">
                                                <span class="likes">
                                                    <i class="icon flo_heart"></i>
                                                    <span>1.5k</span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Widget: Instagram Footer -->
                        <div class="widget stay-connected" id="social-footer">
                            <div class="widget-content">
                                <ul class="uk-flex">
                                    <li>
                                        <a href="#" class="facebook">
                                            <i class="icon flo_facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <i class="icon flo_twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram">
                                            <i class="icon flo_instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribbble">
                                            <i class="icon flo_dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="rss">
                                            <i class="icon flo_rss"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Widget: Social Footer -->
                    </div>
                </div>
                <div class="copyrights">
                    <div class="uk-container">
                        2018 © All rights reserved. <a href="#">Terms of use</a>, <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <div id="mobile-menu" data-uk-offcanvas="overlay: true">
                <div class="inner uk-offcanvas-bar">

                    <header class="header">
                        <div class="uk-flex uk-flex-between uk-flex-middle">
                            <div class="site-logo">
                                <a class="navbar-brand site-title" href="index.html">Notera.</a>
                            </div>
                            <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close="ratio: 1.2;"></button>
                        </div>
                    </header>

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

</body>

</html>