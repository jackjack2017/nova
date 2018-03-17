@extends('back.layout')

@section('title', 'Товары')


@section('main')
    <div class="row">
        <div class="col-md-12">
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
                            <th>Название</th>
                            <th>Категория</th>
                            <th></th>
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
    </div>

@endsection