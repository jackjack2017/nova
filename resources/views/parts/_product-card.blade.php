<a href="{{ route('product', $product->id) }}" class="product-card">
	<div class="product-card-t">
		<img src="{{asset('img/product-img2.jpg')}}" alt="banner">
		<button class="product-card-t-ic __favourite fa fa-heart-o fa-2x"  aria-hidden="true"></button >
		@if($product->new)
			<span class="product-card-t-ic __new"  aria-hidden="true">NEW</span >
		@endif
		@if($product->top)
		<span class="product-card-t-ic __top"  aria-hidden="true">TOP</span >
		@endif
		@if($product->discount)
			<span class="product-card-t-ic __discount fa fa-percent fa-2x"  aria-hidden="true"></span >
		@endif
	</div>
	<div class="product-card-b">
		<div class="product-card-btn-inverse-wrap">
			 <button class="product-card-btn-inverse">Добавить в корзину</button>
		</div>
		<p class="product-card-b-txt">{{ $product->name }}</p>
		<p class="product-card-b-txt">{{ $product->price }} грн</p>
	</div>
</a>