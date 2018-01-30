@extends('back.layout')

@section('title', 'Категории')



{{--@section('css')--}}
{{--<link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">--}}
{{--<style>--}}
{{--input, th span {--}}
{{--cursor: pointer;--}}
{{--}--}}
{{--</style>--}}
{{--@endsection--}}

{{--@section('button')--}}
{{--<a class="btn btn-primary" href="{{ route('categories.create') }}">@lang('New Category')</a>--}}
{{--@endsection--}}

@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="clearfix">
                    <a href="{{ route('categories.create') }}"
                       class="btn btn-sm btn-success pull-right products-btn" title="Создать новую каегорию"><i
                                class="fa fa-plus"> </i> Добавить</a>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable">
                        <thead>
                        <tr role="row">
                            <th></th>
                            <th>ID</th>
                            <th>Название</th>
                            <th></th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach ($products as $product)--}}
                        {{--<tr role="row" id="{{$product['id']}}"--}}
                        {{--class="even products-row js_product_{{$product['id']}} js-sortable-i">--}}
                        {{--<td class="text-center text-light-blue js-sortable-handler"--}}
                        {{--style="cursor: move"><i class="fa  fa-arrows-v"></i></td>--}}
                        {{--<td class="sorting_1">{!! $product['id'] !!}</td>--}}

                        {{--<td>--}}
                        {{--<a href="{{url('/dashboard/ecommerce/category/' . $product['category_id'] . '/edit')}}">--}}
                        {{--{!! isset($product['category']['name']) ? $product['category']['name'] : $product['category']!!}</a>--}}
                        {{--</td>--}}

                        {{--<td>--}}
                        {{--<a href="{{url('/dashboard/ecommerce/product/' . $product['id'] . '/edit')}}">{!! $product['name'] !!}</a>--}}
                        {{--</td>--}}

                        {{--<td style="min-width: 30px;" class="text-center">--}}
                        {{--@if($product['active'])--}}
                        {{--<small class="label label-success" data-toggle="tooltip"--}}
                        {{--title="Активен"><i class="fa fa-check"></i></small>--}}
                        {{--@else--}}
                        {{--<small class="label label-danger" data-toggle="tooltip"--}}
                        {{--title="Не активен"><i class="fa fa-close"></i></small>--}}
                        {{--@endif--}}
                        {{--</td>--}}
                        {{--<td>{!! $product['price'] !!}</td>--}}
                        {{--<td class="text-center" style="min-width: 80px;">--}}
                        {{--<div class="btn-group">--}}
                        {{--<a href="{{url('/dashboard/ecommerce/product/' . $product['id'] . '/edit')}}"--}}
                        {{--class="products-edit btn btn-xs btn-info"><i--}}
                        {{--class="fa fa-pencil-square-o"></i></a>--}}
                        {{--<button type="button" class="btn btn-xs btn-info dropdown-toggle"--}}
                        {{--data-toggle="dropdown" aria-expanded="false">--}}
                        {{--<span class="caret"></span>--}}
                        {{--<span class="sr-only">Toggle Dropdown</span>--}}
                        {{--</button>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li>--}}
                        {{--<a href="{{url('dashboard/ecommerce/product/' . $product['id'] . '/copy')}}">Копировать</a>--}}
                        {{--<a data-item=".js_product_{{$product['id']}}"--}}
                        {{--data-method="DELETE"--}}
                        {{--data-request="{{url('dashboard/ecommerce/product/' . $product['id'])}}"--}}
                        {{--class="js_delete products-delete">Удалить--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</td>--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--@if (session('category-ok'))--}}
    {{--@component('back.components.alert')--}}
    {{--@slot('type')--}}
    {{--success--}}
    {{--@endslot--}}
    {{--{!! session('category-ok') !!}--}}
    {{--@endcomponent--}}
    {{--@endif--}}
    {{--<div class="box">--}}
    {{--<div class="box-header with-border">--}}
    {{--<div id="spinner" class="text-center"></div>--}}
    {{--</div>--}}
    {{--<div class="box-body table-responsive">--}}
    {{--<table id="users" class="table table-striped table-bordered">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>#</th>--}}
    {{--<th>@lang('Title')</th>--}}
    {{--<th>@lang('Slug')</th>--}}
    {{--<th>@lang('Total')</th>--}}
    {{--<th></th>--}}
    {{--<th></th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tfoot>--}}
    {{--<tr>--}}
    {{--<th>#</th>--}}
    {{--<th>@lang('Title')</th>--}}
    {{--<th>@lang('Slug')</th>--}}
    {{--<th>@lang('Total')</th>--}}
    {{--<th></th>--}}
    {{--<th></th>--}}
    {{--</tr>--}}
    {{--</tfoot>--}}
    {{--<tbody id="pannel">--}}
    {{--@include('back.categories.table', compact('categories'))--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.box -->--}}
    {{--</div>--}}
    {{--<!-- /.col -->--}}
    {{--</div>--}}
    {{--<!-- /.row -->--}}

@endsection

{{--@section('js')--}}
{{--<script src="{{ asset('adminlte/js/back.js') }}"></script>--}}
{{--<script>--}}

{{--var category = (function () {--}}

{{--var onReady = function () {--}}
{{--$('#pannel').on('click', 'td a.btn-danger', function (event) {--}}
{{--var that = $(this)--}}
{{--event.preventDefault()--}}
{{--swal({--}}
{{--title: '@lang('Really destroy category ?')',--}}
{{--type: "warning",--}}
{{--showCancelButton: true,--}}
{{--confirmButtonColor: '#DD6B55',--}}
{{--confirmButtonText: '@lang('Yes')',--}}
{{--cancelButtonText: '@lang('No')'--}}
{{--}).then(function () {--}}
{{--back.spin()--}}
{{--$.ajax({--}}
{{--url: that.attr('href'),--}}
{{--type: 'DELETE'--}}
{{--})--}}
{{--.done(function () {--}}
{{--that.parents('tr').remove()--}}
{{--back.unSpin()--}}
{{--})--}}
{{--.fail(function () {--}}
{{--back.fail('@lang('Looks like there is a server issue...')')--}}
{{--}--}}
{{--)--}}
{{--})--}}
{{--})--}}
{{--}--}}

{{--return {--}}
{{--onReady: onReady--}}
{{--}--}}

{{--})()--}}

{{--$(document).ready(category.onReady)--}}

{{--</script>--}}
{{--@endsection--}}