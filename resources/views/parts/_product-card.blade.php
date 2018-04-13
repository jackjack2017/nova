<a href="{{route('product', [isset($product->slug) ? $product->slug : $product->options->slug, $product->id])}}"
   class="product-card js_product-card @if (in_array($product->id, $wishlist_ids))like-product-card @endif" data-id="{{$product->id}}">
    <div class="product-card-t">
        <div class="product-card-lbl-blk">
            @if(isset($product->new) ? $product->new : $product->options->new)
                <span class="product-card-lbl"> <i class="fa fa-bell"></i>New</span>
            @endif
            @if(isset($product->top) ? $product->top : $product->options->top)
                <span class="product-card-lbl"><i class="fa fa-diamond"></i>Top</span>
            @endif
            @if(isset($product->discount)|| isset($product->options->discount))
                <span class="product-card-lbl"><i class="fa fa-percent"></i>Discount</span>
            @endif
        </div>
        <img src="{{asset('img/product-img2.jpg')}}" alt="banner">
    </div>
    <div class="product-card-b">
        <div class="product-card-btn-wrap">
            <button class="product-card-btn-inverse">Подробнее</button>
        </div>
        <div class="product-card-btn-wrap">

            <button class="product-card-btn js_like-btn  @if(in_array($product->id, $wishlist_ids)) __active @endif">
                @if(in_array($product->id, $wishlist_ids))
                    Убрать из избранного
                @else
                    В избранное
                @endif
            </button>
        </div>
        <p class="product-card-b-txt">{{$product->name}}</p>
        <p class="product-card-b-txt">{{$product->price}} грн</p>
    </div>
</a>
