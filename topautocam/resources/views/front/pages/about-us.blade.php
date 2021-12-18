@extends('front.layouts.app')
@section('content')
@foreach($aboutus as $aboutus)         
<div id="slider" class="site-slider background-style boxed-layout ">
    <div class="uk-container uk-container-no">
        <div class="inner uk-position-relative uk-visible-toggle">
            <div class="owl-carousel ">
                <div class="item">
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                               <div class="image cover-image" data-src="https://www.hiewa.com.my/wp-content/uploads/2017/09/alphard.png" data-uk-img=""  title="title" data-uk-parallax="bgy: -300"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            <div class="entry-inner uk-flex uk-flex-center uk-flex-middle uk-flex-first@m">
                                <div class="entry-content">
                                    <div>
                                        <h2 class="title uk-h1 title-font khmer-title-font textNoBold" style="color:white; padding-top:25px;">
                                        {{ __("ABOUT US") }}
                                        </h2>
                                    </div>
                                    <div>
                                        <span class="text uk-text-small khmer-content-font" style="color:yellow;"> <p class="text uk-text-small khmer-content-font">
                                            <a href="/contact" style="color:white;">{{ __("Contact us") }}</a>
                                            {{ __("anytime if you need further assistance") }}</p></span>
                                    </div>
                                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-padding-large " uk-grid> 
                                           <div class=" uk-animation-toggle" style=" opacity: 0.8;">
                                                <div class="uk-card uk-card-default uk-card-body uk-animation-fade">
                                                    <h3 class="title uk-h4 title-font khmer-title-font textNoBold">ចក្ខុវិស័យ</h3>
                                                    <p style="text-align: justify;">{!! $aboutus->vision !!}</p>
                                                </div>
                                            </div>
                                            
                                            <div class=" uk-animation-toggle" style=" opacity: 0.9;">
                                                <div class="uk-card uk-card-primary uk-card-body uk-animation-fade">
                                                    <h3 class="title uk-h4 title-font khmer-title-font textNoBold">បេសកកម្ម</h3>
                                                    <p style="text-align: justify;">{!! $aboutus->mission !!}.</p>
                                                </div>
                                            </div>
                                            <div class=" uk-animation-toggle" style=" opacity: 0.8;">
                                                <div class="uk-card uk-card-secondary uk-card-body uk-animation-fade">
                                                    <h3 class="title uk-h4 title-font khmer-title-font textNoBold">ប្រវត្តិយើង</h3>
                                                    <p style="text-align: justify;">{!! $aboutus->history !!}</p>
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
@endforeach

    <div class="heading center">
        <div>
            <h4 class="title uk-h2 title-font khmer-title-font textNoBold" style="padding-top: 20px;" >{{ __("Our Services") }}</h4>
            <span class="text uk-text-small khmer-content-font">{{ __("Good quality with responsibility") }} </span>
            <hr class="uk-divider-small">
        </div>
    </div>

    <div class="uk-padding-remove-top uk-padding-large" > 
        @foreach($services as $index => $service)
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" id="{{$index}}" uk-grid>
            <div @if($index % 2 == 0) class="uk-card-media-left uk-cover-container"  @else class="uk-flex-last@s uk-card-media-right uk-cover-container" @endif >
                <img src="{{ asset('storage/'.$service->image) }}" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">{{ $service->name }}</h3>
                    <p style="text-align:justify;">{{$service->detail}}</p>
                </div>
            </div>
        </div>
        <!-- <hr class="uk-divider-small" "> -->
        @endforeach
    </div>
    <!-- ---------------------------------------------- -->
    <div class="inner uk-position-relative ">
        <div class="uk-container uk-width-1-2">
            <div class="">
                <!-- <h4 class="title uk-h1 title-font uk-align-center uk-text-center uk-text-bolder"> -->
                    <!-- {{ __("Our Activities") }} -->
                <h4 class="title uk-h2 title-font khmer-title-font uk-text-center textNoBold">        
                {{ __("Our Activities") }}
                </h4>
            </div>
        </div>
    </div>
    
    <div class="block-layout grid-layout two-cols uk-width-3-4 uk-align-center ">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid="">
                @foreach($videos as $index => $video)
                    <article class="post type-post"  @if($index == 0) uk-scrollspy="cls: uk-animation-slide-left; repeat: true" @else uk-scrollspy="cls: uk-animation-slide-right; repeat: true" @endif>
                        <div class="entry-outer">
                            <iframe src="{{$video->urlFrame}}" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                        </div>
                    </article>
                @endforeach    
            </div>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m" >
            @foreach($galleries as $key => $gallerie)
                <li class="uk-inline">
                    <img class ="uk-height-max-medium uk-child-width-1-2 uk-cover-container" src="{{ asset('/storage/'.$gallerie->image)}}" width="500" height="300" alt="">
                </li>
            @endforeach    
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>

@endsection