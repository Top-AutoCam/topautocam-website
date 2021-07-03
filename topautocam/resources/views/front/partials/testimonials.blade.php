<div class="block-listing">
    <div class="uk-container">
        <div class="inner uk-position-relative">

            <div class="heading">
                <div>
                    <h4 class="title uk-h2 title-font khmer-title-font" style="padding-top: 4px;">
                        {{ __("Testimonials") }}
                    </h4>
                </div>
                <div>
                    <span class="more-link">{{ __("What people are talking about us") }}&nbsp;</span>
                </div>
            </div>

            <div class="block-layout grid-layout three-cols">
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                    
                    @foreach($testimonials as $testimonial)
                    <article class="post type-post">
                        <div class="entry-outer">
                            <div class="entry-thumb">
                                <div class="image cover-image" data-src={{ asset('storage/'.$testimonial->image) }} data-uk-img="" title="Post Title"></div>
                                <a class="link-overlay uk-position-cover" href="single.html"></a>
                            </div>
                            <div class="entry-inner">
                                <div class="entry-content">
                                    <h3 class="entry-title khmer-title-font">
                                        <a href="single.html">{{ $testimonial->name }}</a>
                                    </h3>
                                    <p>
                                        {{ $testimonial->detail }}
                                    </p>
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