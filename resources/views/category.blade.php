@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')


    <section class="category">
        <div class="container">
            <div class="container-with-sidebar">

                @include('blocks/_sidebar-filter')

                <div class="cnt">
                    <h2 class="ttl-L">{{$category->name}}</h2>

                    @include('blocks/_filter')

                    <div class="js_showMore-blk">
                        @include('blocks/_products')
                    </div>

                    @if ($products->hasMorePages())
                        <div class="category-btn-show-wrap">
                            <a href="#" class="category-btn-show js_showMore-btn">Показать еще</a>
                        </div>

                    @endif

                    <h2 class="ttl-L">Недавно просмотренные</h2>

                    @include('/blocks/_slider-main', ['products' => $viewed])

                    <h2 class="ttl-L">{{$category->name}}</h2>
                    <div class="default-cnt">
                        <p>{{$category->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection