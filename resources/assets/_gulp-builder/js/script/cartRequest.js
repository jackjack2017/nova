import {getToken} from "../libs/getToken";


export class CartRequest{

    constructor(method = 'POST'){

        this.method = method;
        this.token = getToken();
    }


    /**
     * Init btn
     */
    init(){

        let _this = this;

        $('.js_cart-btn').on('click', function(event) {
            event.preventDefault();
            let productID = $(this).closest('.product-row').data('id');
            let url = '/cart/add';
            _this.requestAdd(url, productID);
        });

        $('.js_header-cart-delete-btn').on('click', function(event) {
            event.preventDefault();
            let item_id = $(this).closest('.header-basket-inner-t').data('item-id');
            let url = '/cart/remove';
            _this.requestRemove(url, item_id);
        })

    }

    /**
     * Change product by colour ajax request
     */
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
                let cartCount = $('.js_cart-count').html();
                +cartCount++;
                $('.js_cart-count').html(+cartCount++);
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
                console.log(data);
                let cartCount = $('.js_cart-count').html();
                +cartCount--;
                $('.js_cart-count').html(+cartCount--);
            }
        });
    }
}