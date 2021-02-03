@foreach ($featuredMotorbikes as $motorbike)
<li class="product type-product has-post-thumbnail">
    <a href="shop-product.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <img width="250" height="250" src="{{asset($motorbike->image)}}" />
        <h2 class="woocommerce-loop-product__title">{{ $motorbike->model }}</h2>
        <span class="price">
            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $motorbike->price }}</span>
        </span>
    </a>
</li>
@endforeach