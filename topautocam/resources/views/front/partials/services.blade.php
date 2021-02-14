<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading">
                <div>
                    <h4 class="title uk-h2 title-font">
                        {{ __("Services") }}
                    </h4>
                </div>
                <div>
                    <span class="more-link">{{ __("Best quality services with responsibility") }}&nbsp;</span>
                </div>
            </div>

            <div class="block-layout grid-layout three-cols">
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                    
                    @foreach($services as $service)
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src={{ asset('storage/'.$service->image) }} data-uk-img="" title="Post Title"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            <div class="entry-inner">
                                <div class="entry-content">
                                    <h3 class="entry-title khmer-title-font">
                                        <a href="single.html">{{ $service->name }}</a>
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