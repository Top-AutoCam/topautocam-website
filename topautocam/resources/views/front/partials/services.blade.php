<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading">
                <div>
                    <h4 class="title uk-h2 title-font khmer-title-font textNoBold" uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">
                        {{ __("Services") }}
                    </h4>
                </div>
                <div>
                    <span class="more-link">{{ __("Best quality services with responsibility") }}&nbsp;</span>
                </div>
            </div>

            <div class="block-layout grid-layout three-cols">
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                    @foreach($services as $index => $service)
                    
                    <article class="post type-post" uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">
                        <div class="entry-outer">
                            <div class="entry-thumb uk-inline-clip uk-transition-toggle">
                                <div class="image cover-image" data-src={{ asset('storage/'.$service->image) }} data-uk-img="" title="Post Title"></div>
                                <a class="link-overlay uk-position-cover" href="/about-us#{{$index}}"></a>
                                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                    <p >{{$service->detail}}</p>
                                </div>
                            </div>
                            <div class="entry-inner">
                                <div class="entry-content">
                                    <h3 class="entry-title khmer-title-font">
                                        {{ $service->name }}
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