<div class="card-cart-col js_cart-blk" data-item-id="{{$product->rowId}}">
    <div class="card-cart">
        <div class="card-cart-b">
            <div class="card-cart-col-col">
                <img src="{{asset('img/product-img1.jpg')}}" alt="product-img">
            </div>
            <div class="card-cart-col-col">
                <p class="card-cart-name">{{$product->name}}</p>
                <div class="card-cart-line">
                    <p class="card-cart-option">Артикул:</p>
                    <p class="card-cart-value">{{$product->options->article}}</p>
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
                        <a href="#" class="btn js_cart-delete-btn" title="Удалить из корзины"><i class="fa fa-trash fa-2x"></i></a>
                    </div>
                    <div class="card-cart-btn-wrap">
                        <a href="#" class="btn" title="Добавить в избранное"><i class="fa fa-star-o fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-cart-col-col __last">
                <div class="card-cart-t js_product-price-blk">
                    <p class="card-cart-price">Цена: <span class="card-cart-price-num js_product-price">{{$product->price}}</span> грн.</p>
                    <p class="card-cart-price-total">Итого: <span class="card-cart-price-num js_product-price-total">{{$product->price * $product->qty}}</span> грн.</p>
                    <div class="count-num">
                        <a href="#" class="count-min js_ui-amount-btn js_ui-amount-btn-dec __disabled"></a>
                        <input type="number" class="amount js_ui-amount-inp js_product-amount" value="{{$product->qty}}" data-min="1" min="1" data-max="999" max="999" readonly>
                        <a href="#" class="count-plus js_ui-amount-btn js_ui-amount-btn-inc"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
