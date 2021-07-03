<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">
            <div class="block-layout featured-layout">
                <div class="uk-grid-match" data-uk-grid="">
                    <div class="col-center uk-width-expand@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image" data-src={{ asset('storage/'.$mainFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="{{ route('car-detail', $mainFeaturedCar->id) }}"></a>
                                    <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                    <!-- <a class="navbar-brand site-title" href="/">
                                        <img src="{{ asset('images/logo.jpeg') }}" style="width: 70px;" />
                                    </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 15px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div> -->
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-meta">
                                            <div>
                                                <span class="meta-category">
                                                    <a href="page-category.html">Men</a>
                                                </span>
                                                <span class="meta-date">
                                                    15 January, 2018
                                                </span>
                                            </div>
                                        </div>
                                        -->
                                        <h3 class="entry-title khmer-title-font">
                                            <a href="{{ route('car-detail', $mainFeaturedCar->id) }}">{{ $mainFeaturedCar->title }}</a>
                                        </h3>
                                        <div class="entry-snippet uk-text-small">
                                            <p>
                                                {{ $mainFeaturedCar->detail }}
                                            </p>
                                        </div>
                                        <!--
                                        <div class="entry-footer">
                                            <div>
                                                <div class="entry-more">
                                                    <a href="#">Continue Reading
                                                        <i class="icon flo_arrow_right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-left col-grid uk-width-1-5@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$topLeftFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="{{ route('car-detail', $topLeftFeaturedCar->id) }}"></a>
                                    <!-- <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 10px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div> -->
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$topLeftFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="{{ route('car-detail', $topLeftFeaturedCar->id) }}">{{$topLeftFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$topRightFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="{{ route('car-detail', $topRightFeaturedCar->id) }}"></a>
                                    <!-- <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 10px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div> -->
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$topRightFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="{{ route('car-detail', $topRightFeaturedCar->id) }}"">{{$topRightFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-right col-grid uk-width-1-5@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$bottomLeftFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href={{ route('car-detail', $bottomLeftFeaturedCar->id) }}></a>
                                    <!-- <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 10px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div> -->
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$bottomLeftFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="{{ route('car-detail', $bottomLeftFeaturedCar->id) }}">{{$bottomLeftFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$bottomRightFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="{{ route('car-detail', $bottomRightFeaturedCar->id) }}"></a>
                                    <!-- <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 10px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div> -->
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $bottomRightFeaturedCar->title }}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="{{ route('car-detail', $bottomRightFeaturedCar->id) }}">{{ $bottomRightFeaturedCar->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>