@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')
<section class="cart">
    <div class="container">
        <div class="ttl-L">Моя корзина</div>
        <div class="card-cart-row">
            @include('blocks/_card-cart')
            @include('blocks/_card-cart')
            @include('blocks/_card-cart')
        </div>
    </div>

    <div class="container __withPad">
        <p class="cart-total">Итого: <span class="cart-total-num js_product-price-total-cart">999</span> грн.</p>
    </div>

    <div class="container __withPad">
        <div class="cart-btn-wrap">
            <a href="#" class="btn-inverse-L">Оформить заказ</a>
        </div>
    </div>

    <div class="container withPad">
        <h2 class="ttl-L">Недавно просмотренные</h2>
        {{--@include('/blocks/_slider-main-big')--}}
    </div>

    <div class="container withPad">
        <h2 class="ttl-L">Хиты продаж</h2>
        {{--@include('/blocks/_slider-main-big')--}}
    </div>
</section>

@endsection