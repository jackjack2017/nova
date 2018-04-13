<div class="page-slider  js_slider-main owl-carousel owl-theme">
    @foreach($products as $product)
        <div class="page-slider-i">
            @include('parts/_product-card', $product)
        </div>
    @endforeach
</div>