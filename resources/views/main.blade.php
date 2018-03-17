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

            <div class="my-container">
                <div class="my-item">
                    <img src="{{asset('img/product-img1.jpg')}}" alt="product-img">
                </div>
                <div class="my-item">
                    <img src="{{asset('img/product-img2.jpg')}}" alt="product-img">
                </div>
            </div>

            <form action="/file-upload"
                  class="dropzone"
                  id="my-awesome-dropzone">
            </form>
    </section>


@endsection