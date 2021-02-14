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
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
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
                                            <a href="single.html">{{ $mainFeaturedCar->title }}</a>
                                        </h3>
                                        <div class="entry-snippet uk-text-small">
                                            <p>
                                                {{ $mainFeaturedCar->detail }}
                                            </p>
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

                    <div class="col-left col-grid uk-width-1-5@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$topLeftFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$topLeftFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="single.html">{{$topLeftFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$topRightFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$topRightFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="single.html">{{$topRightFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-right col-grid uk-width-1-5@m">
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$bottomLeftFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{$bottomLeftFeaturedCar->title}}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="single.html">{{$bottomLeftFeaturedCar->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image ratio-square" data-src={{ asset('storage/'.$bottomRightFeaturedCar->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <!--
                                        <div class="entry-category">
                                            <a href="page-category.html">{{ $bottomRightFeaturedCar->title }}</a>
                                        </div>
                                        -->
                                        <h3 class="uk-h5 uk-text-small khmer-title-font">
                                            <a href="single.html">{{ $bottomRightFeaturedCar->title }}</a>
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