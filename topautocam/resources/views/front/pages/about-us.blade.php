@extends('front.layouts.app')

@section('content')
    <div class="uk-container" >
            <div class="uk-section uk-section-default">
                <div class="uk-container">
                    <h2 style="color:gray;" class="title uk-h2 title-font khmer-title-font uk-text-center textNoBold">{{ __("ABOUT US") }}</h2>
                    <!-- <hr class="uk-divider-small  uk-align-center"> -->
                    <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                        <div class="uk-text-center">
                        <p class="text uk-text-small khmer-content-font">
                            <a href="/contact" class="uk-text-primary">{{ __("Contact us") }}</a>
                            {{ __("anytime if you need further assistance") }}</p>
                        </div>
                    </div>
                </div>
            </div>

    @foreach($aboutus as $aboutus)    
        <div>
            <div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-3-4 uk-margin-top">
                <h3 class="title uk-h2 title-font khmer-title-font uk-text-center textNoBold">ថប់អូតូ</h3>
                <p class="text uk-text-small khmer-content-font" style="text-align: justify;" uk-text-center>{!! $aboutus->overview !!}</p>
            </div>
        </div>

        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top" uk-grid uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
            <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="uk-background-muted uk-padding">
                <img data-src="https://cdn-icons-png.flaticon.com/512/4127/4127786.png" width="100" height="100" alt="" uk-img>
                    <h2>Mission</h2>
                    <div style="text-align: justify;">
                        <p>{!! $aboutus->mission !!}</p>
                    </div>
                </div> 
            </div>

            <div uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">
                <div class="uk-background-muted uk-padding">
                <img data-src="https://cdn-icons-png.flaticon.com/512/3074/3074336.png" width="100" height="100" alt="" uk-img>
                <h2>Vission</h2>
                    <div style="text-align: justify;">
                        <p>{!! $aboutus->vision !!}</p>
                    </div>
                </div>
            </div>

            <div uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                <div class="uk-background-muted uk-padding">
                <img data-src="https://cdn-icons-png.flaticon.com/512/2491/2491622.png" width="100" height="100" alt="" uk-img>
                <h2>History</h2>
                    <div style="text-align: justify;">
                        <p>{!! $aboutus->history !!}</p>
                    </div>
                </div>
            </div>

        </div>
    @endforeach    
    
        <!-- <div class="inner uk-position-relative uk-padding" >
            <div class="uk-container uk-width-1-2">
                <div class="">
                    <h4 class="title uk-h2 title-font khmer-title-font uk-text-center textNoBold">    
                        សមាជិក
                    </h4 >
                </div>
            </div>
        </div> -->

        <!-- <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-match uk-grid-medium" uk-grid>
        @foreach($teams as $team)
            <div class="uk-text-center" uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img class ="uk-height-max-medium uk-child-width-1-2 uk-cover-container" src="{{ asset('/storage/'.$team->image)}}" width="250" height="300" alt="">
                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                        <p >{{$team->role}}</p>
                    </div>
                </div>
                <p class="uk-margin-small-top">{{$team->name}}</p>
            </div>
        @endforeach   
        </div>
    </div> -->

    <div class="inner uk-position-relative uk-padding">
        <div class="uk-container uk-width-1-2">
            <div class="">
                <!-- <h4 class="title uk-h1 title-font uk-align-center uk-text-center uk-text-bolder"> -->
                    <!-- {{ __("Our Activities") }} -->
                <h4 class="title uk-h2 title-font khmer-title-font uk-text-center textNoBold">        
                    សកម្មភាពរបស់ពួកយើង
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

</div>

@endsection