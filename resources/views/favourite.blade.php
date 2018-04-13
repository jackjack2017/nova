@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')
    <section class="favourite">
        <div class="container">
            <h1 class="ttl-L">Мои будущие покупки</h1>
            <div class="card-cart-row">
                @foreach($wishlist as $product)
                    <div class="category-col">
                        @include('parts/_product-card')
                    </div>
                @endforeach

            </div>
        </div>

        <div class="container withPad">
            <h2 class="ttl-L">Недавно просмотренные</h2>
            @include('/blocks/_slider-main-big', ['products' => $viewed])
        </div>

        {{--<div class="container withPad">--}}
            {{--<h2 class="ttl-L">Хиты продаж</h2>--}}
            {{--@include('/blocks/_slider-main-big', ['products' => $top])--}}
        {{--</div>--}}
    </section>

@endsection