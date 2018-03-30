@extends('back.layout')

@section('title', 'Новый товар')

@section('main')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model('', ['url' => route('products.store'), 'class' => 'js-submit','id'=>'qq-form', 'method' => 'POST', 'files' => true, 'enctype' => "multipart/form-data"]) !!}
            @include('back.products._form')
            {!!  Form::close() !!}
        </div>
    </div>
@endsection