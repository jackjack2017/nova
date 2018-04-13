@extends('core/base')
@section('content')

@include('parts/_breadcrumbs')

<section class="product">
    <div class="container">
        @include('/parts/_product-view')
    </div>

    <div class="container withPad">
        <h2 class="ttl-L">Недавно просмотренные</h2>
        @include('/blocks/_slider-main-big', ['products' => $viewed])
    </div>

    <div class="container withPad">
        <h2 class="ttl-L">Сочетается с</h2>
        @include('/blocks/_slider-main-big', ['products' => []])
    </div>
</section>

@endsection