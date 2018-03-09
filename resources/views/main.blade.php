@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')

        <section class="main">
            <div class="container withPad">
                @include('/blocks/_banner-main-right')
            </div>
            <div class="container withPad">
                <h2 class="ttl-L">Новые поступления</h2>
                @include('/blocks/_slider-main-big')
            </div>
            <div class="container withPad">

            </div>
            <div class="container withPad">
                @include('/blocks/_banner-main-left')
            </div>
            <div class="container withPad">
                <h2 class="ttl-L">Хиты продаж</h2>
                @include('/blocks/_slider-main-big')
            </div>
    </section>
@endsection