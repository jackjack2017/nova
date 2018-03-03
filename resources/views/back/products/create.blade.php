@extends('back.layout')

@section('title', 'Новый товар')

@section('main')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model('', ['url' => route('products.store'), 'class' => 'js-submit', 'method' => 'POST']) !!}
            @include('back.products._form')
            {!!  Form::close() !!}
        </div>
    </div>
@endsection