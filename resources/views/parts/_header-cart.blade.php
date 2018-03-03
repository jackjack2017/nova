<div class="header-basket-inner-t">
    @foreach($cart as $item)
        <div class="header-basket-inner-t-col-l">
            <a href="{{asset('img/product-img1.jpg')}}" class="header-basket-img">
                <img src="{{asset('img/product-img1.jpg')}}" alt="product-img">
            </a>
        </div>
        <div class="header-basket-inner-t-col-r">
            <h4 class="header-basket-inner-name">{{ $item->name }}</h4>
            <h4 class="header-basket-inner-price">{{ $item->price }} грн</h4>
            <span class="header-basket-inner-txt">Количество: {{ $item->qty }}</span>
            <span class="header-basket-inner-txt">Цвет: {{ $item->color }}</span>
            <span class="header-basket-inner-txt">Размер: {{ $item->size }}</span>
            <span class="header-basket-inner-total">Итого: {{ $item->price * $item->price }} Грн</span>
        </div>
    @endforeach
</div>
<div class="header-basket-inner-b">
    <div class="header-basket-inner-b-price-line">
        <span class="header-basket-inner-b-price-line-txt">Стоимость заказа</span><span class="header-basket-inner-b-price-line-txt">4 999 грн</span>
    </div>
    <div class="header-basket-inner-b-price-line">
        <span class="header-basket-inner-b-price-line-txt">Доставка</span><span class="header-basket-inner-b-price-line-txt">99 грн</span>
    </div>
    <div class="header-basket-inner-b-price-line-total">
        <span class="header-basket-inner-b-price-line-total-txt">Доставка</span><span class="header-basket-inner-b-price-line-total-txt">99 грн</span>
    </div>
    <div class="header-basket-inner-b-btn-wrap">
        <a href="#" class="header-basket-inner-b-btn-inverse">Оформить заказ</a>
    </div>
    <div class="header-basket-inner-b-btn-wrap">
        <a href="#" class="header-basket-inner-b-btn">В корзину</a>
    </div>
</div>