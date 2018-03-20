@foreach($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->parentCategories->name }}</td>
        <td  class="text-center"><i class="fa {{$category->active ? "fa-check" : "fa-remove"}}"></i></td>
        <td  class="text-center"><a class="btn btn-warning btn-xs" href="{{ route('categories.edit', $category->id) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td  class="text-center">
            {!! Form::open(['url' => route('categories.destroy', $category), 'class' => 'js-submit', 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-xs btn-danger"  title="@lang('Destroy')"> <span class="fa fa-remove"></span></button>
            {!!  Form::close() !!}
        </td>
    </tr>
@endforeach