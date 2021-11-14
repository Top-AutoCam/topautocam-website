<div id="slider" class="site-slider background-style boxed-layout">
    <div class="uk-container uk-container-no">
        <div class="inner uk-position-relative uk-visible-toggle">
            <div class="owl-carousel">
                @foreach($announcements as $announcement)
                <div class="item">
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src="{{asset('storage/' . $announcement->image)}}" data-uk-img=""  title="title" data-uk-parallax="bgy: -50"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            
                            <div class="entry-inner uk-flex uk-flex-center uk-flex-middle uk-flex-first@m">
                                <div class="entry-content">
                                    <div>
                                        <h4 class="title uk-h2 title-font khmer-title-font textNoBold" style="color:white;">
                                            {{$announcement['top_title_'.session()->get('locale')]}}
                                        </h4>
                                    </div>
                                    <h2 class="entry-title title title-font khmer-title-font textNoBold">
                                        <a href="single.html">{{$announcement['title_'.session()->get('locale')]}}</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div>
                                            <span class="title uk-h2 title-font khmer-title-font textNoBold" style="color:white;">
                                                {{$announcement['bottom_title_'.session()->get('locale')]}}
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