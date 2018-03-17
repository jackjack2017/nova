import {getToken} from "../libs/getToken";


export class ChangeProductRequest{

    constructor(method = 'POST'){

        this.method = method;
        this.token = getToken();
    }


    /**
     * Init btn
     */
    init(){

        let _this = this;

        $('.js_product-colour').on('change', function() {

            let productId = $(this).closest('.product-row').data('id');
            let url = '/product/test';

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