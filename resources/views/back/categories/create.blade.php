@extends('back.layout')

@section('title', 'Новая категория')

@section('main')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model('', ['url' => route('categories.store'), 'class' => 'js-submit', 'method' => 'POST']) !!}
            @include('back.categories.form')
            {!!  Form::close() !!}

        </div>
    </div>
@endsection