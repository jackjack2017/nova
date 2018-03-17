@extends('core/base')
@section('content')

    @include('parts/_breadcrumbs')
<section class="deal">
    <div class="container">
        <h1 class="ttl-L">Оформление заказа</h1>
        <div class="container-with-sidebar">

            <div class="cnt">
                <form action="{{url('test')}}" method="post" class="deal-form js_sendform-form-deal">
                    <h2 class="ttl">Личные данные</h2>
                    <div class="deal-row">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-name">ФИО *</label>
                                <input type="text" name="deal-inp-name" required>
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-city">Город *</label>
                                <input type="text" name="deal-inp-city" required>
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-tel">Телефон *</label>
                                <input type="tel" name="deal-inp-tel" required>
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
                                <select class="js_select  js_delivery" name="deal-sel-delivery" style="width:100%;" required>
                                    <option></option>
                                    <option value=".js_delivery-np">Новая почта</option>
                                    <option value=".js_delivery-ukr">Укрпочта</option>
                                    <option value=".js_delivery-self">Самовывоз</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="deal-row js_delivery-form js_delivery-ukr">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-address">Адрес *</label>
                                <input type="text" name="deal-inp-address" class="js_required-field">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-index">Индекс *</label>
                                <input type="text" name="deal-inp-index" class="js_required-field">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-sel-payment-ukr" class="lbl">Выберите способ оплаты *</label>
                                <select class="js_select-payment js_required-field" name="deal-sel-payment-ukr" style="width:100%;">
                                    <option></option>
                                    <option value="Перевод на карту">Перевод на карту</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="deal-row js_delivery-form js_delivery-np">
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-inp-branch">Отделение *</label>
                                <input type="text" name="deal-inp-branch" class="js_required-field">
                            </div>
                        </div>
                        <div class="deal-col">
                            <div class="inp-wrap">
                                <label for="deal-sel-payment-np" class="lbl">Выберите способ оплаты *</label>
                                <select class="js_select-payment js_required-field" name="deal-sel-payment-np" style="width:100%;" class="js_required-field">
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
                    <div class="deal-btn-wrap">
                        <button type="submit" class="btn-inverse-L">Завершить покупку</button>
                    </div>
                </form>
            </div>

            @include('blocks/_sidebar-deal')
        </div>
    </div>


</section>

@endsection