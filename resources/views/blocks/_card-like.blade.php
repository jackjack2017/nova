<div class="card-cart-col like-product-card" data-id="1">
    <div class="card-cart">
        <div class="card-cart-t">
            <p class="card-cart-price">Цена: <span class="card-cart-price-num">{{$product->price}}</span> грн.</p>
        </div>
        <div class="card-cart-b">
            <div class="card-cart-col-l">
                <img src="{{asset('img/product-img1.jpg')}}" alt="product-img">
            </div>
            <div class="card-cart-col-r">
                <p class="card-cart-name">{{$product->name}}</p>
                <div class="card-cart-line">
                    <p class="card-cart-option">Артикул:</p>
                    <p class="card-cart-value">0531687001</p>
                </div>
                <div class="card-cart-line">
                    <p class="card-cart-option">Цвет:</p>
                    <p class="card-cart-value __color" style="background-color: red;"></p>
                </div>
                <div class="card-cart-line">
                    <p class="card-cart-option">Размер:</p>
                    <p class="card-cart-value">S</p>
                </div>
                <div class="card-cart-btn-blk">
                    <div class="card-cart-btn-wrap">
                        <a href="#" class="btn js_like-btn-remove" title="Удалить из избранного"><i class="fa fa-trash fa-2x"></i></a>
                    </div>
                    <div class="card-cart-btn-wrap">
                        <a href="#" class="btn" title="Добавить в корзину"><i class="fa fa-shopping-cart fa-2x"></i></a>
                    </div>
                    <div class="card-cart-btn-wrap">
                        <a href="#" class="btn" title="Подробнее о товаре"><i class="fa fa-search fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
