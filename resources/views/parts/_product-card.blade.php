<a href="{{route('product', [$product->slug, $product->id])}}" class="product-card @if (isset($favourite))like-product-card @endif" data-id="{{$product->id}}">
    <div class="product-card-t">
        <div class="product-card-lbl-blk">
            @if($product->new)
                <span class="product-card-lbl"> <i class="fa fa-bell"></i>New</span>
            @endif
            @if($product->top)
                <span class="product-card-lbl"><i class="fa fa-diamond"></i>Top</span>
            @endif
            @if($product->discount)
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

            <button class="product-card-btn js_like-btn">
                @if(Session::has('likes.' . $product->id))
                    В избранном
                @else
                    В избранное
                @endif
            </button>
        </div>
        <p class="product-card-b-txt">{{$product->name}}</p>
        <p class="product-card-b-txt">{{$product->price}} грн</p>
    </div>
</a>
