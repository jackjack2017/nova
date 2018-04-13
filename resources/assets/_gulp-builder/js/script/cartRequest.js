import {getToken} from "../libs/getToken";


export class CartRequest{

    constructor(method = 'POST'){

        this.method = method;
        this.token = getToken();
    }


    init(){

        let _this = this;

        $('.js_cart-btn').on('click', function(event) {
            event.preventDefault();
            let productID = $(this).closest('.product-row').data('id');
            let url = '/cart/add';
            _this.requestAdd(url, productID);
        });

        $('body').on('click', '.js_cart-delete-btn', function(event) {
            event.preventDefault();
            let item_id = $(this).closest('.header-basket-inner-t').data('item-id');
            let url = '/cart/remove';

            if($('.page-cart').length !== 0){
                let productCard = $(this).closest('.js_cart-blk');
                let deletedPriceTotal = $(this).closest('.js_cart-blk').find('.js_product-price-total').html();
                let totalPriceStrAll = $('.js_product-price-total-cart');
                let totalPriceAll = $(totalPriceStrAll).html();
                let item_id = $(productCard).data('item-id');

                _this.requestRemove(url, item_id);
                $(totalPriceStrAll).html(totalPriceAll - deletedPriceTotal);
                $(productCard).remove();
                return
            }

            _this.requestRemove(url, item_id);
        })

    }


    requestAdd(url, productId){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                product_id: productId,
                _token: this.token
            },
            success: function(data){
                $('.js_header-cart-blk').html(data);
                let cartCount = +$('.js_cart-count').html();
                cartCount++;
                $('.js_cart-count').html(cartCount);
            }
        });
    }

    requestRemove(url, itemId){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                item_id: itemId,
                _token: this.token
            },
            success: function(data){
                $('.js_header-cart-blk').html(data);
                let cartCount = +$('.js_cart-count').html();
                cartCount--;
                $('.js_cart-count').html(cartCount);
            }
        });
    }
}