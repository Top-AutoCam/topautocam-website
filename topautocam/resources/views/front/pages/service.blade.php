@extends('front.layouts.app')
@section('content')

<div id="slider" class="site-slider background-style boxed-layout ">
    <div class="uk-container uk-container-no">
        <div class="inner uk-position-relative uk-visible-toggle">
            <div class="owl-carousel ">
                <div class="item">
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src="https://thumbs.dreamstime.com/b/modern-cars-studio-room-d-illustration-render-161029748.jpg" data-uk-img=""  title="title" data-uk-parallax="bgy: -300"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            <div class="entry-inner uk-flex uk-flex-center uk-flex-middle uk-flex-first@m">
                                <div class="entry-content">
                                    <div>
                                        <h2 class="title uk-h1 title-font khmer-title-font textNoBold" style="color:white;">
                                            Get Your Car New Style
                                        </h2>
                                    </div>
                                    <h2 class="entry-title uk-h3 title title-font khmer-title-font textNoBold">
                                        <a href="single.html">CHOOSE FROM HUNDREDS OF មេត្តា & COLORS</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div>
                                            <span class="title uk-h4 title-font khmer-title-font textNoBold" style="color:yellow;">
                                            <ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
                                                <li class="">
                                                <div class="uk-animation-toggle" tabindex="0">
                                                    <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up uk-transform-origin-top-center">
                                                        <p class="uk-text-center">Top Center</p>
                                                    </div>
                                                </div>
                                                </li>
                                                <li>
                                                    <div class="uk-card uk-card-default uk-card-body uk-text-center">Item 2</div>
                                                </li>
                                                <li>
                                                    <div class="uk-card uk-card-default uk-card-body uk-text-center">Item 3</div>
                                                </li>
                                                <li>
                                                    <div class="uk-card uk-card-default uk-card-body uk-text-center">Item 4</div>
                                                </li>
                                            </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </article>
                </div>
                
            </div>

            <div class="navigation owl-nav uk-hidden-hover uk-visible@l" id="slider-nav"></div>
            <div class="owl-dots uk-hidden-hover" id="slider-dots"></div>

        </div>
        
    </div>
    
</div>

@endsection