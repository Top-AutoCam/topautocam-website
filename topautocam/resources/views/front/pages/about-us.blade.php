@extends('front.layouts.app')

@section('content')

    <div class="uk-container" >
        <div class="uk-section uk-section-default">
            <div class="uk-container">
                <h2 style="color:gray;" class="uk-text-center">ABOUT US</h2>
                <!-- <hr class="uk-divider-small  uk-align-center"> -->
                <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                    <div class="uk-text-center">
                    <p>
                        <a href="/contact" class="uk-text-primary">Contact us</a>
                        anytime if you need further assistance.</p>
                    </div>
                </div>

            </div>
        </div>
    @foreach($aboutus as $aboutus)    
        <div>
            <div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-3-4 uk-margin-top">
                <h3 class="uk-card-title">TOP AUTO</h3>
                <p uk-text-center>{{$aboutus->overview}}</p>
            </div>
        </div>

        <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top" uk-grid>
            <div>
                <div class="uk-background-muted uk-padding">
                <img data-src="https://www.phimc.org/wp-content/uploads/2016/09/about-mission-icon.png" width="100" height="100" alt="" uk-img>
                    <h2>Mission</h2>
                    <p>{{$aboutus->mission}}</p>
                </div> 
            </div>
            <div>
                <div class="uk-background-muted uk-padding">
                <img data-src="https://webstockreview.net/images/vision-clipart-11.png" width="100" height="100" alt="" uk-img>
                <h2>Vission</h2>
                    <p>{{$aboutus->vision}}</p>
                </div>
                
            </div>
            <div>
                <div class="uk-background-muted uk-padding">
                <img data-src="https://cdn2.iconfinder.com/data/icons/fintech-duotone-41px-1/45/history_transaction_record_track-512.png" width="100" height="100" alt="" uk-img>
                <h2>History</h2>
                    <p>{{$aboutus->history}}</p>
                </div>
                
            </div>
        </div>

    @endforeach    


        <div class="inner uk-position-relative uk-padding">
            <div class="uk-container uk-width-1-2">
                <div class="">
                    <h4 class="title uk-h1 title-font uk-align-center uk-text-center uk-text-bolder">
                        {{ __("People") }}
                    </h4>
                </div>
            </div>
        </div>

        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-match uk-grid-small" uk-grid>
        @foreach($teams as $team)

            <div class="uk-text-center">
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-51Utmw56FMBsmHRdRVn8awPHOdTeu0Qsiw&usqp=CAU" alt="">
                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                        <p class="uk-h4 uk-margin-remove">{{$team->role}}</p>
                    </div>
                </div>
                <p class="uk-margin-small-top">{{$team->name}}</p>
            </div>
        @endforeach   
        </div>

    </div>

    <div class="inner uk-position-relative uk-padding">
        <div class="uk-container uk-width-1-2">
            <div class="">
                <h4 class="title uk-h1 title-font uk-align-center uk-text-center uk-text-bolder">
                    {{ __("Our Activities") }}
                </h4>
            </div>
        </div>
    </div>

    <div class="block-layout grid-layout two-cols uk-width-3-4 uk-align-center ">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid="">
                @foreach($videos as $video)
                    <article class="post type-post">
                        <div class="entry-outer">
                            <iframe src="{{$video->urlFrame}}"  width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                        </div>
                    </article>
                @endforeach    
            </div>
    </div>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m" >
    @foreach($galleries as $key => $gallerie)
        <li class="uk-inline">
            <img src="https://electricvehicleweb.in/wp-content/uploads/2020/12/Next-gen-Toyota-Alphard-2021-front-quarters-rendering-1024x688.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>{{$key+1}}</h1></div>
            <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                <a class="navbar-brand site-title" href="/">
                    <img src="{{ asset('images/logo.jpeg') }}" style="width: 50px;" />
                </a>
            </div>
            <div class="uk-position-bottom-left" style="font-size: 15px; color:#FCC201;">
                017 238 008 | 015 238 008
            </div>
        </li>
    @endforeach    
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

    </div>

@endsection