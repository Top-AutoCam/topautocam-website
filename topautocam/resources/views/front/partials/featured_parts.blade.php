@foreach ($featuredParts as $part)
<li class="product type-product has-post-thumbnail">
    <a href="shop-product.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <img width="250" height="250" src="{{asset($part->image)}}" />
        <h2 class="woocommerce-loop-product__title">{{ $part->model }}</h2>
        <span class="price">
            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $part->price }}</span>
        </span>
    </a>
</li>
@endforeach