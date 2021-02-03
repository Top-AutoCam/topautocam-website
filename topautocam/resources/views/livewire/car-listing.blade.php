<div class="uk-grid uk-grid-stack" data-uk-grid="">
    <div class="uk-width-expand uk-first-column">
        <main id="main" class="site-main">
            <div class="inner uk-position-relative">

                <div class="result-ordering">
                    <p class="woocommerce-result-count">Showing</p>
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

                <div class="uk-grid-match" uk-grid>
                    <div class="uk-width-auto@m">
                        <form>
                            <fieldset class="uk-fieldset">

                                <legend class="uk-legend">Filter</legend>

                                <div class="uk-margin">
                                    <input type="text" wire:model="make1">
                                </div>

                                {{ $make1 }}

                                

                                <div class="uk-margin">
                                    <select class="uk-select">
                                        <option>Option 01</option>
                                        <option>Option 02</option>
                                    </select>
                                </div>

                                <div class="uk-margin">
                                    <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
                                </div>

                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                    @foreach($makes as $make)
                                    <label>
                                        <input class="uk-radio" type="radio" name="make" value="{{$make}}"/>&nbsp;{{$make}}
                                    </label>
                                    @endforeach
                                </div>

                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                    <label><input class="uk-checkbox" type="checkbox" checked> A</label>
                                    <label><input class="uk-checkbox" type="checkbox"> B</label>
                                </div>

                                <div class="uk-margin">
                                    <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
                                </div>

                            </fieldset>
                        </form>
                    </div>

                    <div class="uk-width-expand@m">
                        <ul class="products columns-4">
                            @foreach($cars as $car)
                            <li class="product type-product has-post-thumbnail">
                                <a href="shop-product.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <img src={{ asset('storage/'.$car->image)}} width="250" height="250">
                                    <h2 class="woocommerce-loop-product__title">Striped T-Shirt</h2>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">{{ $car->make }}</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <nav class="woocommerce-pagination">
                <ul class="page-numbers">
                    <li>
                        <span aria-current="page" class="page-numbers current">1</span>
                    </li>
                    <li>
                        <a class="page-numbers" href="#page2">2</a>
                    </li>
                    <li>
                        <a class="next page-numbers" href="#page2">→</a>
                    </li>
                </ul>
            </nav>
        </main>
    </div>
</div>