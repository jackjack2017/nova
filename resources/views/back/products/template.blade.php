@extends('back.layout')

@section('main')

    {{ Form::model('', array('url' => '', 'files'  => true ,'method' => 'PUT', 'class' => '')) }}

    <div class="row">
        <div class="col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Основное</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Описание</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Опции</a></li>
                    <li><a href="#tab_4" data-toggle="tab" aria-expanded="false">Галерея</a></li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <div class="col-md-4">
                                {!! $form->checkbox('active', 'Активный') !!}
                            </div>
                            <div class="col-md-4">
                                {!! $form->checkbox('top', 'Топ') !!}
                            </div>
                            <div class="col-md-4">
                                {!! $form->checkbox('new', 'Новый') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                {!! $form->text('name', null, 'Название') !!}
                            </div>
                            <div class="col-md-2">
                                {!! $form->select('gender', ['Мужской', 'Женский', "Дети"], null,'Пол') !!}
                            </div>
                            <div class="col-md-2">
                                {!! $form->text('article', null, 'Артикул') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! $form->select('category', ['Трусы'], null, 'Категория') !!}
                            </div>
                            <div class="col-md-6">
                                {!! $form->text('brand', null, 'Бренд') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                {!! $form->text('price', null, 'Цена') !!}
                            </div>
                            <div class="col-md-3">
                                {!! $form->text('price_with_discount', null, 'Цена со скидкой') !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                {!! $form->text('discount', null, 'Скидка') !!}
                            </div>
                            <div class="col-md-3">
                                {!! $form->select('discount_type', ['денежная', 'процентная'], null, 'Тип скидки') !!}
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="row">
                            <div class="col-md-6">
                                {!! $form->text('season', null, 'Сезон') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! $form->text('style', null, 'Стиль') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! $form->text('textile', null, 'Текстиль') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! $form->textarea('description', null, 'Описание') !!}
                            </div>
                            <div class="col-md-6">
                                {!! $form->textarea('textile', null, 'Комментарий') !!}
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_3">
                        <div class="row">
                            <div class="col-md-4">
                                {!! $form->text('article', null, 'Артикул') !!}
                            </div>
                            <div class="col-md-4">
                                {!! $form->select('color', ['черный', 'красный', 'зеленый'], null, 'Цвет') !!}
                            </div>
                            <div class="col-md-4">
                                {!! $form->text('size', null, 'Размер') !!}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_4">
{{--                        {!! $form->imageLoad('images', 'Галерея', isset($product) ? $product->gallery : '', ['multiple' => '']) !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
    <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
    </div>
@endsection
