<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP AUTO</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    
    <link rel="stylesheet" href="{{asset('css/floicons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <script src="{{asset('js/jquery.min.js')}}">
    </script>
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    @livewireStyles

</head>

<body class="antialiased bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    @include('front/partials/header')
    @include('front/partials/slider')

    <div class="block-listing">
        <div class="uk-container">
            <div class="inner uk-position-relative">

                <div class="heading">
                    <div>
                        <h4 class="title uk-h2" style="padding-top: 15px;">
                            {{ __("Cars") }}
                        </h4>
                    </div>
                    <!-- <div>
                        <a href="page-category.html" class="more-link">{{ __("See all in recent")}}</a>
                    </div> -->
                </div>

                <div class="block-layout grid-layout four-cols">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid="">
                        @foreach($featuredCars as $featuredCars)
                           @if($featuredCars != null)
                                <article class="post type-post">
                                    <div class="entry-outer">
                                        <div class="entry-thumb">
                                            <div class="image cover-image" data-src={{ asset('storage/'.$featuredCars->image) }} data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="single.html"></a>
                                        </div>
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <h3 class="uk-text-small">
                                                    <a href="single.html">{{ $featuredCars->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </article> 
                            @else  
                            @endif  
                        @endforeach
                    
                    </div>
                </div>
                <!-- End Layout -->

            </div>
        </div>
</div>


<div class="block-listing">
        <div class="uk-container">
            <div class="inner uk-position-relative">

                <div class="heading">
                    <div>
                        <h4 class="title uk-h2" style="padding-top: 15px;">
                            {{ __("Motorbikes") }}
                        </h4>
                    </div>
                    <!-- <div>
                        <a href="page-category.html" class="more-link">{{ __("See all in recent")}}</a>
                    </div> -->
                </div>

                <div class="block-layout grid-layout four-cols">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid="">
                        @foreach($featuredMotorbikes as $featuredMotorbikes)
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image" data-src={{ asset('storage/'.$featuredMotorbikes->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <h3 class="uk-text-small">
                                            <a href="single.html">{{ $featuredMotorbikes->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article> 
                        @endforeach
                    
                    </div>
                </div>
                <!-- End Layout -->

            </div>
        </div>
</div>


<div class="block-listing">
        <div class="uk-container">
            <div class="inner uk-position-relative">

                <div class="heading">
                    <div>
                        <h4 class="title uk-h2 " style="padding-top: 15px;">
                            {{ __("Parts") }}
                        </h4>
                    </div>
                    <!-- <div>
                        <a href="page-category.html" class="more-link">{{ __("See all in recent")}}</a>
                    </div> -->
                </div>

                <div class="block-layout grid-layout four-cols">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" data-uk-grid="">
                        @foreach($featuredParts as $featuredParts)
                        <article class="post type-post">
                            <div class="entry-outer">
                                <div class="entry-thumb">
                                    <div class="image cover-image" data-src={{ asset('storage/'.$featuredParts->image) }} data-uk-img="" title="Post Title"></div>
                                    <a class="link-overlay uk-position-cover" href="single.html"></a>
                                </div>
                                <div class="entry-inner">
                                    <div class="entry-content">
                                        <h3 class="uk-text-small">
                                            <a href="single.html">{{ $featuredParts->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article> 
                        @endforeach
                    
                    </div>
                </div>
                <!-- End Layout -->

            </div>
        </div>
</div>

    @include('front/partials/footer')

</body>

</html>