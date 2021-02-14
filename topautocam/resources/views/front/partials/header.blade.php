
<header id="header" class="site-header" data-uk-sticky="top: 300; animation: uk-animation-slide-top">
    <div class="uk-container uk-container-expand">
        <div class="uk-flex uk-flex-between uk-flex-middle">
            <h1 class="site-logo">
                <a class="navbar-brand site-title" href="/">
                    @include('front/partials/logo')
                </a>
            </h1>
            <nav class="primary-menu uk-visible@l">
                <ul class="menu">
                    <li>
                        <a href="/" class="{{ Route::currentRouteName() == 'home' ? 'selected-menu' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="/cars" class="{{ Route::currentRouteName() == 'car-index' ? 'selected-menu' : '' }}">Car</a>
                    </li>
                    <li>
                        <a href="/motorbikes" class="{{ Route::currentRouteName() == 'motorbike-index' ? 'selected-menu' : '' }}">Motorbike</a>
                    </li>
                    <li>
                        <a href="/parts" class="{{ Route::currentRouteName() == 'part-index' ? 'selected-menu' : '' }}">Part</a>
                    </li>
                    <li>
                        <a href="/blog" class="{{ Route::currentRouteName() == 'blog-index' ? 'selected-menu' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="/contact" class="{{ Route::currentRouteName() == 'contact' ? 'selected-menu' : '' }}">Contact</a>
                    </li>

                    <!-- 
                    <li>
                        <a href="#">Features</a>
                        <ul>
                            <li><a href="#">Home Layouts</a>
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
                            <li><a href="#">Featured Slider</a>
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
                            <li><a href="#">Post Templates</a>
                                <ul>
                                    <li><a href="single.html">Full Post</a></li>
                                    <li><a href="single-sidebar.html">With Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Page Templates</a>
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
                    <li><a href="#">Categories</a>
                        <ul>
                            <li><a href="#">Life Style</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Make Up</a></li>
                            <li><a href="#">Beauty</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">Shop</a>
                        <ul>
                            <li><a href="shop.html">Products Listing</a>
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
                    -->
                </ul>
            </nav>
            <div class="secondary-menu uk-visible@s">
                <div class="search">
                    <a class="toggle" href="#"><i class="icon flo_search"></i></a>
                    <div class="uk-drop" data-uk-drop="mode: click; pos: left-center; offset: 0">
                        <form class="uk-search uk-search-navbar uk-width-1-1" action="/">
                            <input class="uk-search-input" name="q" type="search" placeholder="Search" autofocus="">
                        </form>
                    </div>
                </div>

                <div class="membership">
                    <a href="/login" class="login">Log In</a>
                </div>
                <div class="locale">
                    <form method="POST" action="/locale">
                        @csrf
                        <button class="uk-button uk-button-link">
                            @if(session()->get('locale') == 'en')
                                <x-khmer/>
                            @else
                                <x-english/>
                            @endif 
                        </button>
                    </form>
                </div>
            </div>
            <div class="mobile-menu uk-hidden@s">
                <div class="cart">
                    <a href="shop-cart.html">
                        <i class="icon flo_bag_alt"></i>
                        <span class="count">3</span>
                    </a>
                </div>
                <div class="trigger" data-uk-toggle="target: #mobile-menu">
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>