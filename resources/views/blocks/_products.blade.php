<div class="category-row">
    @foreach($products as $product)
        <div class="category-col">
            @include('parts/_product-card')
        </div>
        <div class="category-col">
            @include('parts/_product-card')
        </div>
        <div class="category-col">
            @include('parts/_product-card')
        </div>
        <div class="category-col">
            @include('parts/_product-card')
        </div>
    @endforeach
</div>