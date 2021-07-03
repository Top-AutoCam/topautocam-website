@extends('front.layouts.app')

@section('content')

<div id="primary" class="site-primary">
    <div class="uk-container">

        <div class="page-heading">
            <div class="uk-container">
            <div class="inner uk-position-relative">
                    <div>
                        <h4 class="title uk-h2 title-font khmer-title-font">{!! __("Articles") !!}</h4>
                    </div>
                    <div>
                        <ul class="uk-breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>Classic Layout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Page Heading -->
        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-expand">
                <main id="main" class="site-main">
                    <div class="block-listing">
                        <div class="uk-container">
                            <div class="inner uk-position-relative">
                                <div class="block-layout classic-layout">
                                    <div class="uk-grid-large uk-child-width-1-1" data-uk-grid="">
                                        @foreach($posts as $key => $post)
                                        <article class="post type-post">
                                            <div class="entry-outer">
                                            <?php
                                                $contents = json_decode($post->post_content);
                                                foreach($contents as $content){
                                                    $images = $content->attributes;
                                                } 
                                            ?>
                                                <div class="entry-thumb">
                                                    <div class="image cover-image" data-src="{{$images->image}}" data-uk-img="" title="Post Title"></div>
                                                    <a class="link-overlay uk-position-cover" href="{{ route('post', $post->slug) }}"></a>
                                                </div>

                                                <div class="entry-inner">
                                                    <div class="entry-content">
                                                        <div class="entry-meta">
                                                            <div>
                                                                <span class="meta-category">
                                                                    <span class="khmer-title-font">{{ $post->category->title }}</span>
                                                                </span>
                                                                <span class="meta-date">
                                                                {{ $post->created_at->format('d F, Y') }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <h3 class="entry-title khmer-title-font">
                                                            <a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a>
                                                        </h3>
                                                        <div class="entry-snippet">
                                                            <p class="uk-panel uk-text-truncate">
                                                                {!! $post->post_introduction !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="entry-footer">
                                                        <div>
                                                            <div class="entry-more">
                                                                <a href="{{ route('post', $post->slug)}}">Continue Reading <i class="icon flo_arrow_right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="entry-share mini-share">
                                                                <a href="https://www.facebook.com/topauto.kh"  target="_blank" ><i class="icon flo_facebook"></i></a>
                                                                <a href="https://twitter.com/Topautocam1?s=09" target="_blank"><i class="icon flo_twitter"></i></a>
                                                                <a href="https://www.pinterest.com/topautocam/" target="_blank"><i class="icon flo_pinterest"></i></a>
                                                                <a href="#"><i class="icon flo_google_plus"></i></a>
                                                            </div>
                                                            <div class="entry-comments">
                                                                <a href="single.html#comments">
                                                                    <i class="icon flo_comment_bubble"></i>
                                                                    <span class="count">23</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                  </div>
                                </div><!-- End Layout -->
                            </div>
                        </div>
                    </div>
                    <!-- End Block Listing : Classic -->

                    <div class="pagination">
                        <ul>
                            <li class="uk-active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">→</a></li>
                        </ul>
                    </div>
                    <!-- End Pagination -->

                </main>
            </div>

            <div class="uk-width-1-4@m">
                <aside id="sidebar" class="site-sidebar" data-uk-sticky="offset: 70; media: @m; bottom: #primary">
                    <div class="widget post-listing popular" id="popular-posts">
                        <h2 class="title uk-h4">
                            <span>Popular Posts</span>
                        </h2>
                        <div class="widget-content">
                            <article class="post type-post has-post-thumbnail">
                                <div class="entry-outer uk-grid uk-grid-small uk-child-width-1-1">
                                    <div class="entry-thumb">
                                        <span class="image cover-image" data-src="https://www.digitalvidya.com/wp-content/uploads/2019/03/personal-blog.jpg" data-uk-img="" title="Post Title"></span>
                                        <a class="link-overlay uk-position-cover" href="#"></a>
                                    </div>
                                    <div class="entry-inner">
                                        <div class="entry-content">
                                            <h5 class="entry-title uk-h5">
                                                <a href="single.html">The Best Views in London Right Now</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <div>
                                                    <span class="meta-date">
                                                        15 January, 2018
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post type-post has-post-thumbnail">
                                <div class="entry-outer uk-grid uk-grid-small uk-child-width-1-1">
                                    <div class="entry-thumb">
                                        <span class="image cover-image" data-src="https://www.wpbeginner.com/wp-content/uploads/2018/07/whatisblog.png" data-uk-img="" title="Post Title"></span>
                                        <a class="link-overlay uk-position-cover" href="#"></a>
                                    </div>
                                    <div class="entry-inner">
                                        <div class="entry-content">
                                            <h5 class="entry-title uk-h5">
                                                <a href="single.html">Exclusive Design a Master Bed Scratch</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <div>
                                                    <span class="meta-date">
                                                        15 January, 2018
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post type-post has-post-thumbnail">
                                <div class="entry-outer uk-grid uk-grid-small uk-child-width-1-1">
                                    <div class="entry-thumb">
                                        <span class="image cover-image" data-src="https://mirroredsouls.com/wp-content/uploads/2021/04/how-to-start-a-blog-featured-image.jpg" data-uk-img="" title="Post Title"></span>
                                        <a class="link-overlay uk-position-cover" href="#"></a>
                                    </div>
                                    <div class="entry-inner">
                                        <div class="entry-content">
                                            <h5 class="entry-title uk-h5">
                                                <a href="single.html">Get a First Look at the Fall Collection</a>
                                            </h5>
                                            <div class="entry-meta">
                                                <div>
                                                    <span class="meta-date">
                                                        15 January, 2018
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- 
                    <div class="widget stay-connected" id="stay-connected">
                        <h2 class="title uk-h4">
                            <span>Stay Connected</span>
                        </h2>
                        <div class="widget-content">
                            <ul class="uk-flex">
                                <li><a href="#" class="facebook"><i class="icon flo_facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icon flo_twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icon flo_instagram"></i></a></li>
                                <li><a href="#" class="dribbble"><i class="icon flo_dribbble"></i></a></li>
                                <li><a href="#" class="rss"><i class="icon flo_rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="widget newsletter" id="newsletter">
                        <h2 class="title uk-h4">
                            <span>Join the family!</span>
                        </h2>
                        <div class="widget-content">
                            <form class="mc4wp-form" method="post">
                                <div class="mc4wp-form-fields">
                                    <input class="uk-input" type="email" name="EMAIL" placeholder="Email Address" required="">
                                    <button class="uk-button uk-button-secondary">
                                        <span>Subscribe</span>
                                    </button>
                                    <span class="spamMsg">Don't worry we don't spam!</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    -->

                    <div class="widget post-listing" id="recent-posts">
                        <h2 class="title uk-h4"><span>Recent Posts</span></h2>
                        <div class="widget-content">
                            <article class="post type-post">
                                <div class="entry-outer uk-grid uk-grid-small">
                                    <div class="uk-width-1-3">
                                        <div class="entry-thumb">
                                            <div class="image cover-image ratio-square" data-src="https://fiorecommunications.com/wp-content/uploads/2014/07/shutterstock_381746308-3.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <h6 class="entry-title uk-h6">
                                                    <a href="single.html">Exclusive Design a Master Bed Scratch</a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <div>
                                                        <span class="meta-date">
                                                            <span class="date">27 July, 2018</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post type-post">
                                <div class="entry-outer uk-grid uk-grid-small">
                                    <div class="uk-width-1-3">
                                        <div class="entry-thumb">
                                            <div class="image cover-image ratio-square" data-src="https://www.teknopk.com/wp-content/uploads/2018/03/blogging.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <h6 class="entry-title uk-h6">
                                                    <a href="single.html">The Best Views in London Right Now</a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <div>
                                                        <span class="meta-date">
                                                            <span class="date">27 July, 2018</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post type-post">
                                <div class="entry-outer uk-grid uk-grid-small">
                                    <div class="uk-width-1-3">
                                        <div class="entry-thumb">
                                            <div class="image cover-image ratio-square" data-src="https://static1.gensler.com/uploads/hero_element/15971/thumb_mobile/thumbs/blog-automotive-retail-200605-1024x576_1591395265_508x286.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <h6 class="entry-title uk-h6">
                                                    <a href="single.html">Get a First Look at the Fall Collection</a>
                                                </h6>
                                                <div class="entry-meta">
                                                    <div>
                                                        <span class="meta-date">
                                                            <span class="date">27 July, 2018</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="widget categories-list" id="categories-list">
                        <h2 class="title uk-h4"><span>Categories</span></h2>
                        <div class="widget-content">
                            <ul class="uk-list uk-list-divider">
                                <li>
                                    <a href="page-category.html">
                                        <span class="cat">Travel</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-category.html">
                                        <span class="cat">Fashion</span>
                                        <span class="count">10</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-category.html">
                                        <span class="cat">Life Style</span>
                                        <span class="count">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-category.html">
                                        <span class="cat">Music</span>
                                        <span class="count">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-category.html">
                                        <span class="cat">Stories</span>
                                        <span class="count">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

@endsection