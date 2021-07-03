@extends('front.layouts.app')

@section('content')

<div id="primary" class="site-primary">
    <div class="uk-container">
        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-expand">
                <main id="main" class="site-main">
                    <div class="inner">
                        <article class="post type-post single">
                            <header class="entry-header uk-text-center">
                                <div class="entry-category">
                                    <span>{{ $post->category->title }}</span>
                                </div>
                                <h1 class="entry-title uk-h1">{{ $post->title }}</h1>
                                <div class="entry-meta">
                                    <div>
                                        <span class="meta-author">
                                            By Admin
                                        </span>
                                        <span class="meta-date">
                                            {{ $post->created_at->format('d F, Y') }}
                                        </span>
                                        <span class="meta-comment">
                                            <a href="#">3 Comments</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="entry-share">
                                    <a class="facebook" href="#"><i class="icon flo_facebook"></i></a>
                                    <a class="twitter" href="#"><i class="icon flo_twitter"></i></a>
                                    <a class="gplus" href="#"><i class="icon flo_google_plus"></i></a>
                                </div>
                            </header>
                            <div class="entry-content">
                                
                                <div class="entry-thumb">
                                    <div class="image cover-image" data-src="{{ $images->image}}" data-uk-img="" title="Post detail"></div>
                                    <!-- asset('storage/'. -->
                                </div>
                                <div class="entry-body uk-container uk-container-small">
                                    <p class=" uk-panel uk-text-break" style="text-align: justify;">
                                        {{ $post->post_introduction }}
                                    </p>
                                   <!--/----- -->
                                </div>
                            </div>
                            <div class="entry-footer">
                                <!--
                                    <div>
                                        <div class="entry-tags">
                                            <span>Tags:</span>
                                            <a href="#">Women</a>
                                            <a href="#">Fashion</a>
                                            <a href="#">Model</a>
                                        </div>
                                    </div>
                                -->
                                <div></div>
                                <div>
                                    <div class="entry-share mini-share">
                                        <span>Share Article:</span>
                                        <a href="#"><i class="icon flo_facebook"></i></a>
                                        <a href="#"><i class="icon flo_twitter"></i></a>
                                        <a href="#"><i class="icon flo_google_plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- End Article -->
                        <!--
                        <section class="float-pagination">
                            <div class="inner">
                                <a class="prev" href="single.html#prev">
                                    <span>Previous Article</span>
                                    <h5>Experience nature, tranquility and relaxation</h5>
                                </a>
                                <a class="next" href="single.html#next">
                                    <span>Next Article</span>
                                    <h5>The northern coastline: How I fell in love</h5>
                                </a>
                            </div>
                        </section>
                        -->
                        <!-- End Pagination -->
                        <!--
                        <section class="author-box">
                            <div class="uk-grid" data-uk-grid="">
                                <div class="uk-width-auto@m">
                                    <figure class="author-avatar">
                                        <img alt="Sarah Janie" src="assets/images/instagram/07.jpg" />
                                    </figure>
                                </div>
                                <div class="uk-width-expand@m">
                                    <div class="author-info">
                                        <h6 class="author-name">
                                            <span>Posted by</span>
                                            <a href="page-author.html">Sarah Janie</a>
                                        </h6>
                                        <p>Quaerat, alias distinctio. Nisi et iure facilis? Molestias voluptas assumenda vero quibusdam voluptatibus sunt ullam non, sed, accusantium minus voluptatem quae atque laudantium impedit voluptatum amet error laboriosam? Repellendus sint voluptatem saepe!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        -->
                        <!-- End Author Box -->
                        <section class="related-posts" id="related-posts">
                            <div class="heading">
                                <div>
                                    <h4 class="title uk-h2">You might also like</h4>
                                </div>
                            </div>
                            <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                                <div class="post type-post">
                                    <div class="entry-outer">
                                        <div class="entry-thumb">
                                            <div class="image cover-image" data-src="assets/images/posts/34.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="single.html"></a>
                                        </div>
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <div class="entry-category">
                                                    <a href="page-category.html">Beauty</a>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="single.html">5 Ways to stay motivated after January</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post type-post">
                                    <div class="entry-outer">
                                        <div class="entry-thumb">
                                            <div class="image cover-image" data-src="assets/images/posts/32.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="single.html"></a>
                                        </div>
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <div class="entry-category">
                                                    <a href="page-category.html">Travel</a>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="single.html">The northern coastline: How I fell in love</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post type-post">
                                    <div class="entry-outer">
                                        <div class="entry-thumb">
                                            <div class="image cover-image" data-src="assets/images/posts/50.jpg" data-uk-img="" title="Post Title"></div>
                                            <a class="link-overlay uk-position-cover" href="single.html"></a>
                                        </div>
                                        <div class="entry-inner">
                                            <div class="entry-content">
                                                <div class="entry-category">
                                                    <a href="page-category.html">Fashion</a>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="single.html">Experience nature, tranquility and relaxation</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Related Posts -->
                        <!--
                        <section class="comments-area" id="comments">
                            <div class="uk-container uk-container-small">
                                <div class="inner uk-position-relative">
                                    <div class="comments-title">
                                        <h2><span>3 replies to</span> “5 Ways To Stay Motivated After January”</h2>
                                    </div>
                                    <ol class="comments-list">
                                        <li class="uk-comment">
                                            <div class="uk-comment-header uk-grid uk-grid-medium uk-flex-middle">
                                                <div class="uk-width-auto">
                                                    <img class="comment-avatar uk-comment-avatar" src="assets/images/avatar.jpg" width="80" height="80" alt="Author Name" />
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="comment-name uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Janie Doe</a></h4>
                                                    <ul class="comment-meta uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                        <li><a href="#">2 days ago</a></li>
                                                        <li><a href="#reply_to">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-content uk-comment-body">
                                                <p>Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </li>
                                        <li class="uk-comment">
                                            <div class="uk-comment-header uk-grid uk-grid-medium uk-flex-middle">
                                                <div class="uk-width-auto">
                                                    <img class="comment-avatar uk-comment-avatar" src="assets/images/instagram/06.jpg" width="80" height="80" alt="Author Name" />
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="comment-name uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Sarah Janie</a></h4>
                                                    <ul class="comment-meta uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                        <li><a href="#">1 day ago</a></li>
                                                        <li><a href="#reply_to">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-content uk-comment-body">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </li>
                                        <li class="uk-comment">
                                            <div class="uk-comment-header uk-grid uk-grid-medium uk-flex-middle">
                                                <div class="uk-width-auto">
                                                    <img class="comment-avatar uk-comment-avatar" src="assets/images/avatar.jpg" width="80" height="80" alt="Author Name" />
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h4 class="comment-name uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Richard Roe</a></h4>
                                                    <ul class="comment-meta uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                                        <li><a href="#"> 2 mins ago</a></li>
                                                        <li><a href="#reply_to">Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="comment-content uk-comment-body">
                                                <p>Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </li>
                                    </ol>
                                    <p class="no-comments">Comments are closed.</p>
                                </div>
                            </div>
                        </section>
                        -->
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection
