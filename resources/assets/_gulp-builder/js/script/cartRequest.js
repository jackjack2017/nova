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
            _this.request(url, productID); 
        })
    }

    /**
     * Change product by colour ajax request
     */
    request(url, productId){  
        $.ajax({
            url: url,
            method: this.method,
            data: {
                product_id: productId,
                _token: this.token
            },
            success: function(data){
                $('.js_header-cart-blk').append(data);
            }
        });

    }

    /**
     * On success request
     */
    success(data) {
       console.log(data);
    }

}