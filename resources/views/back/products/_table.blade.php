@foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->article }}</td>
        <td>{{ $product->name }}</td>
        <td > <a href="{{route('categories.edit', $product->category_id)}}">{{$categories[$product->category_id]}}</a></td>
        <td class="text-center"><a class="btn btn-warning btn-xs" href="{{ route('products.edit', $product->id) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td class="text-center">
            {!! Form::open(['url' => route('products.destroy', $product), 'class' => 'js-submit', 'method' => 'DELETE']) !!}
            <button type="submit" class="btn btn-xs btn-danger"  title="@lang('Destroy')"> <span class="fa fa-remove"></span></button>
            {!!  Form::close() !!}
        </td>
    </tr>
@endforeach

