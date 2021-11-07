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
                                        {{ __("ABOUT US") }}
                                        </h2>
                                    </div>
                                    <div>
                                        <span class="text uk-text-small khmer-content-font" style="color:yellow;"> <p class="text uk-text-small khmer-content-font">
                                <a href="/contact" style="color:white;">{{ __("Contact us") }}</a>
                                {{ __("anytime if you need further assistance") }}</p></span>
                                    </div>
                                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-padding-large " uk-grid>
                                           <div class=" uk-animation-toggle">
                                                <div class="uk-card uk-card-default uk-card-body uk-animation-fade">
                                                    <h3 class="title uk-h4 title-font khmer-title-font textNoBold">ជួលជុលឡាន</h3>
                                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                            <div class=" uk-animation-toggle">
                                                <div class="uk-card uk-card-primary uk-card-body uk-animation-fade">
                                                    <h3 class="uk-card-title">Primary</h3>
                                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                            <div class=" uk-animation-toggle">
                                                <div class="uk-card uk-card-secondary uk-card-body uk-animation-fade">
                                                    <h3 class="uk-card-title">Secondary</h3>
                                                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
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

<div class="heading center">
    <div>
        <h4 class="title uk-h2 title-font khmer-title-font textNoBold" style="padding-top: 20px;" >{{ __("Most Viewed")}}</h4>
        <span class="text uk-text-small khmer-content-font">{{ __("Come to see what everyone is seeing")}}</span>
        <hr class="uk-divider-small">
    </div>
</div>

<div class="uk-padding-remove-top uk-padding-large" > 
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="https://thumbs.dreamstime.com/b/modern-cars-studio-room-d-illustration-render-161029748.jpg" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Left</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <hr class="uk-divider-small" >
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
            <img src="https://thumbs.dreamstime.com/b/modern-cars-studio-room-d-illustration-render-161029748.jpg" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Right</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-padding-remove-top uk-padding-large">
    <div class="uk-card uk-card-primary uk-card-body">
        <div class="uk-panel">
            <button class="uk-button uk-button-default uk-align-center uk-align-right@m uk-margin-remove-adjacent" disabled>Disabled</button>
            <h3 class="uk-card-title">Primary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>    
</div>



@endsection