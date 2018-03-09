@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')
    <section class="favourite">
        <div class="container">
            <h1 class="ttl-L">Мои будущие покупки</h1>
            <div class="card-cart-row">
                @include('blocks/_card-like')
                @include('blocks/_card-like')
                @include('blocks/_card-like')
            </div>
        </div>

        <div class="container withPad">
            <h2 class="ttl-L">Недавно просмотренные</h2>
            @include('/blocks/_slider-main-big')
        </div>

        <div class="container withPad">
            <h2 class="ttl-L">Хиты продаж</h2>
            @include('/blocks/_slider-main-big')
        </div>
    </section>

@endsection