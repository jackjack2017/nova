@extends('back.layout')

@section('title', 'Товары')


@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Основное</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Excel</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="box box-solid">
                            <div class="clearfix">
                                <a href="{{ route('products.create') }}"
                                   class="btn btn-sm btn-success pull-right products-btn" title="Создать новый отвар"><i
                                            class="fa fa-plus"> </i> Добавить</a>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-hover dataTable">
                                    <thead>
                                    <tr role="row">
                                        <th>ID</th>
                                        <th>Артикул</th>
                                        <th>Название</th>
                                        <th>Категория</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @include('back.products._table')
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_2">
                        <div class="box-body">
                            {!! Form::open(['url' => route('products.import'),'files' => true, 'class' => 'js-submit', 'method' => 'PUT']) !!}

                            <div class="form-group col-md-5">
                                {!! $form->file('product_import', 'Импорт товаров') !!}
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                            </div>
                            {!!  Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

@endsection