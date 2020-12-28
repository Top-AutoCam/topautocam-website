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
                                <h1 class="entry-title uk-h1 khmer-title-font">{{ __("Contact") }}</h1>
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
                                    <a class="facebook" href="#"><i class="icon flo_facebook"></i></a>
                                    <a class="twitter" href="#"><i class="icon flo_twitter"></i></a>
                                    <a class="gplus" href="#"><i class="icon flo_google_plus"></i></a>
                                </div>
                            </header>
                            <div class="entry-content">
                                <div class="entry-body uk-container uk-container-small">
                                    <div style="width: 100%">
                                        <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=173%20Beech%20Street%20%20Pleasanton%2C%20California%20%20United%20States+(Notera)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                            <a href="https://www.maps.ie/create-google-map/">Create Google Map</a>
                                        </iframe>
                                    </div>
                                    <br />
                                    <br />
                                    <div class="uk-column-1-3 uk-column-divider">
                                        <p>contact@notera.com <br /> Tel : +31 1 58 12 12 86 <br /> Tel : +31 1 58 12 12 87</p>
                                        <p>173 Beech Street <br /> Pleasanton, California <br /> United States</p>
                                        <p>Working Hours: <br /> 7am – 12pm <br /> 1pm – 6pm</p>
                                    </div>
                                    <br />
                                    <p class="uk-text-lead">If you would like to join us on our journey around the world and beyond, then you can follow us on a social media channels.</p>
                                    <p>We’d love for you to be a part of the adventure! Want to drop us an email?</p>
                                    <form class="uk-form-stacked uk-form-horizontal uk-margin-large-top khmer-content-font">
                                        <div class="uk-margin">
                                            <label class="uk-form-label uk-text-lead" for="email">{{ __("Email") }}</label>
                                            <div class="uk-form-controls uk-width-1-2@s">
                                                <input class="uk-input" id="email" type="text" />
                                            </div>
                                        </div>
                                        <div class="uk-margin-medium">
                                            <label class="uk-form-label uk-text-lead" for="message">{{ __("Your Message") }}</label>
                                            <div class="uk-form-controls">
                                                <textarea class="uk-textarea" id="message" rows="7"></textarea>
                                            </div>
                                        </div>
                                        <div class="uk-margin">
                                            <div class="uk-form-controls">
                                                <input class="uk-button uk-button-secondary uk-text-lead uk-text-uppercase" 
                                                    id="submit" value="{{__("Send Message")}}" style="color: white"/>
                                            </div>
                                        </div>
                                    </form>
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