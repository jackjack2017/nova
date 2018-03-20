@extends('core/base')
@section('content')

@include('parts/_breadcrumbs')

<div class="product">
    	<div class="product-container">
    		@include('/parts/_product-view')

            <h2 class="product-ttl">Недавно просмотренные</h2>
            @include('/blocks/_slider-main')

            <h2 class="product-ttl">Сочетается с</h2>
            @include('/blocks/_slider-main')
    	</div>
    </div>

@endsection