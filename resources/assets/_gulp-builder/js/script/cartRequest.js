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
            let productId = $(this).closest('.product-row').data('id');
            console.log(productId);
            let url = '/cart/add';
            _this.request(url, productId); 
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
                productId: productId,
                _token: this.token
            },
            success: this.success()
        });

    }

    /**
     * On success request
     */
    success() {
        // let info = JSON.parse(data);
        console.log('success');
    }

}