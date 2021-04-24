@extends('front.layouts.app')

@section('content')

<div id="primary" class="site-primary">
    <div class="uk-container">

        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-expand">
                <main id="main" class="site-main">
                    <div class="inner">
                        <article class="post type-page single">
                            <header class="entry-header uk-text-center">
                                <h1 class="entry-title uk-h1 title-font">{{ __("Contact") }}</h1>
                                <div class="entry-meta">
                                    <!--
                                    <div>
                                        <span class="meta-author">
                                            By <a href="page-author.html">Sarah Janie</a>
                                        </span>
                                        <span class="meta-date">
                                            15 January, 2018
                                        </span>
                                        <span class="meta-comment">
                                            <a href="single.html#comments">3 Comments</a>
                                        </span>
                                    </div>
                                    -->
                                </div>
                                <div class="entry-share">
                                    <a class="facebook" href="https://www.facebook.com/topauto.kh"><i class="icon flo_facebook"></i></a>
                                    <a class="twitter" href="https://twitter.com/Topautocam1?s=09"><i class="icon flo_twitter"></i></a>
                                    <a class="gplus" href="#"><i class="icon flo_google_plus"></i></a>
                                </div>
                            </header>
                            <div class="entry-content">
                                <div class="entry-body uk-container uk-container-small">
                                    <div style="width: 100%">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2358.088501151008!2d104.87612493439391!3d11.554789383891372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951bfaa821311%3A0x808a33e8c6c0308d!2sTOP%20AUTOSHOP!5e0!3m2!1sen!2skh!4v1615080085546!5m2!1sen!2skh" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                                            <a href="https://www.maps.ie/create-google-map/">Create Google Map</a>
                                        </iframe>
                                    </div>
                                    <br />
                                    <br />
                                    <div class="uk-column-1-3 uk-column-divider">
                                        <p>topautocam@gmail.com <br /> Tel : +885 17 238 008 <br /> Tel : +885 15 238 008 <br /> Tel : +885 67 238 008</p>
                                        <p>Street 13B<br /> 2004, Phnom Penh <br /> Cambodia</p>
                                        <p>Working Hours: <br /> 8am – 12pm <br /> 1pm – 5pm</p>
                                    </div>
                                    <br />

                                    <livewire:contact-form />

                                </div>
                            </div>
                        </article>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection