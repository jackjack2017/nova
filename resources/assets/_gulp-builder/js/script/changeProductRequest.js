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

            let colorId = $(this).data('color');
            let productId = $(this).closest('.product-row').data('id');
            let url = '/product/test';
            console.log(this);
            console.log(productId);
            console.log(colorId);
            _this.request(url, colorId, productId);
        })
    }

    /**
     * Change product by colour ajax request
     */
    request(url, colorId, productId){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                colorId: colorId,
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