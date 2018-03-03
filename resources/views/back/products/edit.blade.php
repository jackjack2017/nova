@extends('back.layout')

@section('title', 'Редактирование товара')

@section('main')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($product, ['url' => route('products.update', $product), 'class' => 'js-submit', 'method' => 'PUT']) !!}
                @include('back.products._form')
            {!!  Form::close() !!}
        </div>
    </div>
@endsection