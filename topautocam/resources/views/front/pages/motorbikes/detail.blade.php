@extends('front.layouts.app')

@section('content')

<div id="primary" class="site-primary has-sidebar">
    <div class="uk-container uk-container-small">
        <div class="uk-grid" data-uk-grid="">
            <div class="uk-width-expand">
                <main id="main" class="site-main">
                    <div class="inner uk-position-relative">
                        <div class="product type-product has-post-thumbnail product-type-simple">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <div class="woocommerce-product-gallery__image">
                                    <a href="{{ asset('storage/'.$motorbike->image) }}">
                                        <img src="{{ asset('storage/'.$motorbike->image) }}" alt="Black and White Striped T-shirt">
                                    </a>
                                </div>
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>{{ $motorbike->price }}</span>
                                </p>
                            </figure>
                            
                            <div class="summary entry-summary">
                                <h1 class="product_title entry-title">{{ $motorbike->title }}</h1>
                                
                                <div class="woocommerce-product-details__short-description">
                                    <table cellspacing="0" class="shop_table shop_table_responsive">

                                        <tbody>
                                            <tr class="motorbiket-subtotal">
                                                <th>Model</th>
                                                <td data-title="color">
                                                    {{ $motorbike->model }}
                                                </td>
                                            </tr>
                                            <tr class="motorbiket-subtotal">
                                                <th>Make</th>
                                                <td data-title="color">
                                                    {{ $motorbike->make }}
                                                </td>
                                            </tr>
                                            
                                            <tr class="motorbiket-subtotal">
                                                <th>Color</th>
                                                <td data-title="color">
                                                    {{ $motorbike->color }}
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                        <a href="#tab-description">Description</a>
                                    </li>
                                    <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                        <a href="#tab-additional_information">Additional information</a>
                                    </li>
                                    <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                        <a href="#tab-reviews">Reviews (0)</a>
                                    </li>
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
                                    <h2>Detail</h2>
                                    <p>
                                        {!! $motorbike->detail !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection