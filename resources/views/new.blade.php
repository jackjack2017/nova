@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')

    <section class="page">
        <div class="container">
            <div class="cnt">
                <h2 class="ttl-L">Новые поступления</h2>

                @include('blocks/_filter')

                <div class="js_showMore-blk">
                    @include('blocks/_products')
                </div>

                @if ($products->hasMorePages())
                    <div class="category-btn-show-wrap">
                        <a href="#" class="category-btn-show js_showMore-btn">Показать еще</a>
                    </div>

                @endif
            </div>
        </div>
    </section>

@endsection