@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')
<section class="deal">
    <div class="container">
        <h1 class="ttl-L">Оформление заказа</h1>
        <div class="container-with-sidebar">

            <div class="cnt">
                <form action="#" class="deal-form">
                    <h2 class="ttl">Личные данные</h2>
                    <div class="deal-row">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-name">ФИО *</label>
                                <input type="text" name="deal-inp-name">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-city">Город *</label>
                                <input type="tel" name="deal-inp-city">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-tel">Телефон *</label>
                                <input type="tel" name="deal-inp-tel">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-mail">E-mail</label>
                                <input type="text" name="deal-inp-mail">
                            </div>
                        </div>
                    </div>
                    <h2 class="ttl">Информация о доставке / оплате</h2>
                </form>
            </div>
            @include('blocks/_sidebar-menu')
        </div>
    </div>


</section>

@endsection