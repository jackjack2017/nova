@foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->active }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td><a class="btn btn-warning btn-xs btn-block" href="{{ route('products.edit', [$product->id]) }}" role="button" title="@lang('Edit')"><span class="fa fa-edit"></span></a></td>
        <td><a class="btn btn-danger btn-xs btn-block" href="{{ route('products.destroy', [$product->id]) }}" role="button" title="@lang('Destroy')"><span class="fa fa-remove"></span></a></td>
    </tr>
@endforeach

