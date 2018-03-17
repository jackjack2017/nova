@extends('back.layout')

@section('title', 'Редактирование категории')

@section('main')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($category, ['url' => route('categories.update', $category), 'class' => 'js-submit', 'method' => 'PUT']) !!}
            @include('back.categories.form')
            {!!  Form::close() !!}

        </div>
    </div>
@endsection