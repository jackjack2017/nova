@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')


    <section class="category">
        <div class="container">
            <div class="container-with-sidebar">

                @include('blocks/_sidebar-filter')

                <div class="cnt">
                    <h2 class="ttl-L">Платья</h2>

                    @include('blocks/_filter')

                    @include('blocks/_products')

                    <div class="category-btn-show-wrap">
                        <a href="#" class="category-btn-show js_showMore-btn">Показать еще</a>
                    </div>

                    <h2 class="ttl-L">Недавно просмотренные</h2>

                    @include('/blocks/_slider-main')

                    <h2 class="ttl-L">Платья</h2>
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