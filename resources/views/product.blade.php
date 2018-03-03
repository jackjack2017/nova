@extends('core/base')
@section('content')

@include('parts/_breadcrumbs')

<div class="product">
    	<div class="product-container">
    		@include('/parts/_product-view')
            <h2 class="product-ttl">Недавно просмотренные</h2>
            <div class="page-slider  js_slider-main owl-carousel owl-theme">
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
            </div>
            <h2 class="product-ttl">Сочетается с</h2>
            <div class="page-slider  js_slider-main owl-carousel owl-theme">
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
                <div class="page-slider-i">
                    @include('parts/_product-card')
                </div>
            </div>
    	</div>
    </div>

@endsection