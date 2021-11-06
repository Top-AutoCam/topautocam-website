<div id="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <p class="uk-text-bold" style="font-size:20px;">Under Construction</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">OK</button>
        </p>
    </div>
</div>


<div class="uk-grid uk-grid-stack" data-uk-grid="">
    <div class="uk-width-expand uk-first-column">
        <main id="main" class="site-main">
            <div class="inner uk-position-relative">

                <div class="result-ordering">
                    <p class="woocommerce-result-count">FOUND {{ $total }} PARTS</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="popularity" selected="selected">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                    </form>
                </div>

                <div class="uk-grid uk-grid-stack">
                    <div class="uk-width-1-5@m">
                        <form>
                            <fieldset class="uk-fieldset">

                                <legend class="uk-legend">Filter</legend>

                                <div class="uk-margin">
                                    <input type="text" wire:model="search"/>
                                </div>

                                <div class="uk-margin">
                                    <label class="label">Make</label>
                                    <select class="uk-select" wire:model="make1">
                                        <option value="">ALL</option>
                                        @foreach($makes as $make)
                                        <option value="{{ $make }}">{{ $make }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="uk-margin">
                                    <label class="label">Model</label>
                                    <select class="uk-select" wire:model="model1">
                                        <option value="">ALL</option>
                                        @foreach($models as $model)
                                        <option value="{{ $model }}">{{ $model }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="uk-margin">
                                    <label class="label">Color</label>
                                    <select class="uk-select" wire:model="color1">
                                        <option value="">ALL</option>
                                        @foreach($colors as $color)
                                        <option value="{{ $color }}">{{ $color }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!--
                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
                                </div>

                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                    <label><input class="uk-checkbox" type="checkbox" checked> A</label>
                                    <label><input class="uk-checkbox" type="checkbox"> B</label>
                                </div>

                                <div class="uk-margin">
                                    <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
                                </div>
                                -->
                                
                            </fieldset>
                        </form>
                    </div>

                    <!-- <div class="uk-width-4-5@m">
                        <ul class="products columns-4">
                            @foreach($parts as $part)
                            <li class="product type-product has-post-thumbnail" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
                                <a href="{{ route('part-detail', $part->id) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <img class ="uk-height-max-small uk-child-width-1-4 uk-cover-container" src={{ asset('/storage/'.$part->image)}} width="250" height="250">
                                    <h2 class="woocommerce-loop-product__title khmer-title-font">{{ $part->title }}</h2>

                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">{{ $part->make }} | {{ $part->model }}</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div> -->

                    <div class="uk-width-4-5@m">
                        <ul class="products columns-4">
                            @foreach($parts as $part)
                            <li class="product type-product has-post-thumbnail " uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.5">
                                <a href="{{ route('part-detail', $part->id) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link " >
                                    <div class ="uk-inline">
                                        <img  class ="uk-height-max-small uk-child-width-1-4 uk-cover-container" src="{{ asset('/storage/'.$part->image)}}" width="250" height="250">
                                        <!-- <div>   
                                            <div class="uk-position-top-right" style="font-size: 15px; color:#FCC201;font-weight: 900;">
                                                <a class="navbar-brand site-title" href="/">
                                                    <img src="{{ asset('images/logo.jpeg') }}" style="width: 40px;" />
                                                </a>
                                            </div>
                                            <div class="uk-position-bottom-left" style="font-size: 10px; color:#FCC201;">
                                                017 238 008 | 015 238 008
                                            </div>
                                        </div> -->
                                    </div> 
                                    <h2 class="woocommerce-loop-product__title khmer-title-font" style="font-size: 15px;">{{  $part->title }}</h2>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">{{ $part->make }} | {{ $part->model }}</span>
                                        </span>
                                    </span>
                                </a>
                                @guest
                                @else
                                    <span class="uk-badge uk-margin">${{ $part->price }}</span>
                                @endguest
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                </div>

            </div>

            {{ $parts->links() }}
        
        </main>
    </div>
</div>