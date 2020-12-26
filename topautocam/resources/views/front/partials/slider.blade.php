<div id="slider" class="site-slider background-style boxed-layout">

    <div class="uk-container uk-container-no">
        <div class="inner uk-position-relative uk-visible-toggle">

            <div class="owl-carousel">

                @foreach($announcements as $announcement)
                <div class="item">
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src="{{asset('storage/' . $announcement->image)}}" data-uk-img="" 
                                        title="title" data-uk-parallax="bgy: -200"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>

                            <div class="entry-inner uk-flex uk-flex-center uk-flex-middle uk-flex-first@m">
                                <div class="entry-content">
                                    <div class="entry-category">
                                        <a href="page-category.html">{{$announcement->title}}</a>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="single.html">{{$announcement->title}}</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div>
                                            <span class="meta-date">
                                                15 January, 2018
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
                
            </div>

            <div class="navigation owl-nav uk-hidden-hover uk-visible@l" id="slider-nav"></div>
            <div class="owl-dots uk-hidden-hover" id="slider-dots"></div>

        </div>
    </div>
</div>