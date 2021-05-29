<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading center">
                <div>
                    <h4 class="title uk-h2 title-font" style="padding-top: 5px;">{{ __("Most Viewed")}}</h4>
                    <span class="text uk-text-small khmer-content-font">{{ __("Come to see what everyone is seeing")}}</span>
                </div>
            </div>

            <div class="block-layout featured-layout">
                <div class="uk-grid-match" data-uk-grid="">
                    
                    <div class="col-center uk-width-expand@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image" data-src="{{ asset('storage/'.$mainMostCarView->image) }}" data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                    <div class="uk-position-top-right" >
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 70px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 17px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <div class="entry-meta">
                                            <div>
                                                <span class="meta-category">
                                                    <a href="page-category.html"> {{ $mainMostCarView->make }} {{ $mainMostCarView->model }}</a>
                                                </span>
                                                <span class="meta-date">
                                                {{ $mainMostCarView->created_at->format('d-m-Y') }}
                                                </span>
                                            </div>
                                        </div>
                                        <h3 class="entry-title khmer-title-font">
                                            <a href="#">{{ $mainMostCarView->title }}</a>
                                        </h3>
                                        <div class="entry-snippet">
                                            <p>{{ $mainMostCarView->detail }}</p>
                                        </div>
                                        <div class="entry-footer">
                                            <div>
                                                <div class="entry-more">
                                                    <a href="#">Continue Reading
                                                        <i class="icon flo_arrow_right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    
         

                    <div class="col-left col-grid uk-width-1-5@m uk-flex-first@m">
                    <!-- Left Part -->
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src="{{ asset('storage/'.$leftTopMostCarView->image) }}" data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                    <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 12px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $leftTopMostCarView->make }} {{ $leftTopMostCarView->model }}</a>
                                        </div>
                                        <h3 class="entry-title uk-h5 khmer-title-font">
                                            <a href="single.html">{{ $leftTopMostCarView->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Left Part -->
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src="{{ asset('storage/'.$leftButtomMostCarView->image)}}" data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                    <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 12px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $leftButtomMostCarView->make }} {{ $leftButtomMostCarView->model }}</a>
                                        </div>
                                        <h3 class="entry-title uk-h5 khmer-title-font">
                                            <a href="single.html">{{ $leftButtomMostCarView->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-right col-grid uk-width-1-5@m">

                        <!-- Right Part -->
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src="{{ asset('storage/'.$rightTopMostCarView->image) }}" data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                    <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 12px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $rightTopMostCarView->make }} {{ $rightTopMostCarView->model }}</a>
                                        </div>
                                        <h3 class="entry-title uk-h5 khmer-title-font">
                                            <a href="single.html">{{ $rightTopMostCarView->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Right Part -->
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb uk-inline">
                                    <div class="image cover-image ratio-square" data-src="{{ asset('storage/'.$leftButtomMostCarView->image) }}" data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                    <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                        <a class="navbar-brand site-title" href="/">
                                            <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                        </a>
                                    </div>
                                    <div class="uk-position-bottom-left" style="font-size: 12px; color:#FCC201;">
                                        017 238 008 | 015 238 008
                                    </div>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $rightBottomMostCarView->make }} {{ $rightBottomMostCarView->model }}</a>
                                        </div>
                                        <h3 class="entry-title uk-h5 khmer-title-font">
                                            <a href="single.html">{{ $rightBottomMostCarView->title }}</a>
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