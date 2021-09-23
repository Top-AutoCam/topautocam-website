<div class="block-listing" id="promotion">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading">
                <div>
                    <h4 class="title uk-h2 title-font khmer-title-font textNoBold">
                        {{ __("Promotions") }}
                    </h4>
                </div>
                <!-- <div>
                    <a href="/promotions" class="more-link">{{ __("See all in promotions") }}</a>
                </div> -->
        </div>
            <div class="block-layout grid-layout two-cols">
                <div class="uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid="">
                    @foreach($promotions as $index => $promotion)
                    <div @if($index == 0) uk-scrollspy="cls: uk-animation-slide-left; repeat: true" @else uk-scrollspy="cls: uk-animation-slide-right; repeat: true" @endif>
                        <div class="uk-animation-fade">
                            <article class="post type-post">
                                <div class="entry-outer">
                                    <div class="entry-thumb uk-inline-clip uk-transition-toggle" >
                                        <div class="image cover-image" data-src={{ asset('storage/'.$promotion->image)}} data-uk-img="" title="Post Title"></div>
                                        <a class="link-overlay uk-position-cover" ></a>
                                        <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                            <p >{{$promotion->detail}}</p>
                                        </div>
                                    </div>
                                    <div class="entry-inner">
                                        <div class="entry-content">
                                            <h3 class="entry-title khmer-title-font">
                                                <a href="single.html">{{ $promotion->name }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End Layout -->

        </div>
    </div>
</div>