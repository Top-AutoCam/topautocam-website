<header id="header" class="site-header" data-uk-sticky="top: 300; animation: uk-animation-slide-top">
    <div class="uk-container uk-container-expand">
        <div class="uk-flex uk-flex-between uk-flex-middle">
            <h1 class="site-logo">
                <a class="navbar-brand site-title" href="/">
                    <img src="{{ asset('images/logo.jpeg') }}" style="width: 50px;" />
                </a>
            </h1>
            <nav class=" primary-menu uk-visible@l">
                <ul class="menu uk-text">
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
                        <a href="/blog" class="{{ Route::currentRouteName() == 'blog' ? 'selected-menu' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="/about-us" class="{{ Route::currentRouteName() == 'about-us' ? 'selected-menu' : '' }}">About Us</a>
                    </li>
                    <li>
                        <a href="/contact" class="{{ Route::currentRouteName() == 'contact' ? 'selected-menu' : '' }}">Contact</a>
                    </li>
                    <li>
                        <a href="/fqas" class="{{ Route::currentRouteName() == 'fqas' ? 'selected-menu' : '' }}">FQAs</a>
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
                    <!-- <a href="/login" class="login">Log In</a> -->
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item uk-list">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            <!-- 
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>s
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

                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li> -->

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