@extends('back.layout')

@section('title', 'Категории')

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
                            <th>ID</th>
                            <th>Название</th>
                            <th>Родительская категория</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @include('back.categories.table')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('adminlte/js/back.js') }}"></script>
<script>

var category = (function () {

var onReady = function () {
$('#pannel').on('click', 'td a.btn-danger', function (event) {
var that = $(this)
event.preventDefault()
swal({
title: '@lang('Really destroy category ?')',
type: "warning",
showCancelButton: true,
confirmButtonColor: '#DD6B55',
confirmButtonText: '@lang('Yes')',
cancelButtonText: '@lang('No')'
}).then(function () {
back.spin()
$.ajax({
url: that.attr('href'),
type: 'DELETE'
})
.done(function () {
that.parents('tr').remove()
back.unSpin()
})
.fail(function () {
back.fail('@lang('Looks like there is a server issue...')')
}
)
})
})
}

return {
onReady: onReady
}

})()

$(document).ready(category.onReady)

</script>
@endsection