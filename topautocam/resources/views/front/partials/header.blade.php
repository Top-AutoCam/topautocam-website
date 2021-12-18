<header id="header" class="site-header" data-uk-sticky="top: 300; animation: uk-animation-slide-top">
    <div class="uk-container uk-container-expand">
        <div class="uk-flex uk-flex-between uk-flex-middle">
            <h1 class="site-logo">
                <a class="navbar-brand site-title" href="/">
                    <img src="{{ asset('images/new_logo.png') }}" style="width: 130px;" />
                </a>
            </h1>
            <nav class=" primary-menu uk-visible@l">
                <ul class=" menu uk-text-uppercase text uk-text-small khmer-content-font" style="font-weight: normal;">
                    <li>
                        <a  style=" font-family: Arial, Helvetica, sans-serif;" href="/" class="{{ Route::currentRouteName() == 'home' ? 'selected-menu' : '' }}">{{ __("Home") }}</a>
                    </li>
                    <li><a style=" font-family: Arial, Helvetica, sans-serif;" href="/cars" class="{{ Route::currentRouteName() == 'car-index' ? 'selected-menu' : '' }}">{{ __("Car") }}</a>
                        <ul class="uk-card">
                            <li><a style=" font-family: Arial, Helvetica, sans-serif;font-size:15px;" href="/cars">រថយន្តក្នុងស្តុប</a></li>
                            <li><a style=" font-family: Arial, Helvetica, sans-serif;font-size:15px;" href="/catalog">ការកម្មង់រថយន្ត</a></li>
                            <li><a style=" font-family: Arial, Helvetica, sans-serif;font-size:15px;" href="/steeringconversion">បច្ចេកទេសការប្ដូរចង្កូត</a></li>
                        </ul>
                    </li>
                    <li>
                        <a  style=" font-family: Arial, Helvetica, sans-serif;" href="/motorbikes" class="{{ Route::currentRouteName() == 'motorbike-index' ? 'selected-menu' : '' }}">{{ __("Motorbike") }}</a>
                    </li>
                    <li>
                        <a style=" font-family: Arial, Helvetica, sans-serif;" href="/parts" class="{{ Route::currentRouteName() == 'part-index' ? 'selected-menu' : '' }}">{{ __("Part") }}</a>
                    </li>
                    <li>
                        <a style="font-family: Arial, Helvetica, sans-serif;" href="/blog" class="{{ Route::currentRouteName() == 'blog' ? 'selected-menu' : '' }}">{{ __("Blog") }}</a>
                    </li>
                    <li>
                        <a style=" font-family: Arial, Helvetica, sans-serif;" href="/about-us" class="{{ Route::currentRouteName() == 'about-us' ? 'selected-menu' : '' }}">{{ __("About Us") }}</a>
                    </li>
                    <li>
                        <a style="font-family: Arial, Helvetica, sans-serif;" href="/contact" class="{{ Route::currentRouteName() == 'contact' ? 'selected-menu' : '' }}">{{ __("CONTACT") }}</a>
                    </li>
                    <li>
                        <a style=" font-family: Arial, Helvetica, sans-serif;" href="/fqas" class="{{ Route::currentRouteName() == 'fqas' ? 'selected-menu' : '' }}">{{ __("FQAs") }}</a>
                    </li> 
                </ul>
            </nav>

            <div class="secondary-menu uk-visible@s">
                <div class="search">
                    <a class="toggle" href="#"><i class="icon flo_search"></i></a>
                    <div class="uk-drop" data-uk-drop="mode: click; pos: left-center; offset: 0">
                        <form class="uk-search uk-search-navbar uk-width-1-1" action="/search" method="get">
                            <input class="uk-search-input" name="q" type="search" placeholder="Search" autofocus="">
                        </form>
                    </div>
                </div>

                <div class="membership">
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item uk-list">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                    @else

                            <button class="uk-button uk-button-default" type="button" role="button" >{{ Auth::user()->name }}</button>
                            <div uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-active">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    <!-- <li class="uk-nav-divider"></li> -->
                                </ul>
                            </div>

                        @endguest
                </div>

                <div class="locale">
                    <form method="POST" action="/locale">
                        @csrf
                        <button class="uk-button uk-button-link">
                            @if(session()->get('locale') == 'en')
                            <x-khmer />
                            @else
                            <x-english />
                            @endif
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mobile-menu uk-hidden@s">
                <!--
                <div class="cart">
                    <a href="shop-cart.html">
                        <i class="icon flo_bag_alt"></i>
                        <span class="count">3</span>
                    </a>
                </div>
                -->

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