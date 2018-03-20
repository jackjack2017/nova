@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')


    <section class="category">
        <div class="category-container-main">
            <div class="category-container">

                @include('blocks/_sidebar-filter')

                <div class="category-cnt">
                    <h2 class="category-ttl-L">Платья</h2>
                    <div class="category-cnt-filter">
                        <p class="category-cnt-filter-txt">Сортировать по:</p>
                        <a href="#" class="category-cnt-filter-lnk">Популярные</a>
                        <a href="#" class="category-cnt-filter-lnk">По возрастанию</a>
                        <a href="#" class="category-cnt-filter-lnk">По убыванию</a>
                        <a href="#" class="category-cnt-filter-lnk">Новинки</a>
                        <a href="#" class="category-cnt-filter-lnk">Со скидкой</a>
                    </div>
                    {{--<div class="category-cnt-filter">--}}
                    {{--<p class="category-cnt-filter-txt">Показывать по:</p>--}}
                    {{--<a href="#" class="category-cnt-filter-lnk __active">12</a>--}}
                    {{--<a href="#" class="category-cnt-filter-lnk">24</a>--}}
                    {{--<a href="#" class="category-cnt-filter-lnk">36</a>--}}
                    {{--<a href="#" class="category-cnt-filter-lnk">Все</a>--}}
                    {{--</div>--}}

                    @include('blocks/_products')

                    <div class="category-btn-show-wrap">
                        <a href="#" class="category-btn-show js_showMore-btn">Показать еще</a>
                    </div>

                    {{--@include('parts/_pagination')--}}

                    <h2 class="category-ttl">Недавно просмотренные</h2>

                    @include('/blocks/_slider-main')

                    <h2 class="category-ttl-L">Платья</h2>
                    <div class="default-cnt">
                        <p>Составляйте стильные ансамбли с белоснежными рубашками, прозрачными блузками и легкими
                            туниками. Чтобы создать всегда актуальный и безупречный образ, который легко преобразить,
                            сочетайте любимые изделия с подходящими аксессуарами.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection