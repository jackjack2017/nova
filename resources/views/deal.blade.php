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
                    <div class="deal-row">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-sel-delivery" class="lbl">Выберите способ доставки *</label>
                                <select class="js_select" name="deal-sel-delivery" style="width:100%;" required>
                                    <option></option>
                                    <option value="Новая почта">Новая почта</option>
                                    <option value="Укрпочта">Укрпочта</option>
                                    <option value="Самовывоз">Самовывоз</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="deal-row js_delivery-ukr">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-address">Адрес *</label>
                                <input type="text" name="deal-inp-address">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-index">Индекс *</label>
                                <input type="text" name="deal-inp-index">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-sel-payment-ukr" class="lbl">Выберите способ оплаты *</label>
                                <select class="js_select-payment" name="deal-sel-payment-ukr" style="width:100%;" required>
                                    <option></option>
                                    <option value="Перевод на карту">Перевод на карту</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="deal-row js_delivery-np">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-branch">Отделение *</label>
                                <input type="text" name="deal-inp-branch">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-sel-payment-np" class="lbl">Выберите способ оплаты *</label>
                                <select class="js_select-payment" name="deal-sel-payment-np" style="width:100%;" required>
                                    <option></option>
                                    <option value="Перевод на карту">Перевод на карту</option>
                                    <option value="Наложенный платеж">Наложенный платеж</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="deal-row">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-comment">Комментарий</label>
                                <textarea name="deal-inp-comment" rows="5" cols="5"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @include('blocks/_sidebar-menu')
        </div>
    </div>


</section>

@endsection