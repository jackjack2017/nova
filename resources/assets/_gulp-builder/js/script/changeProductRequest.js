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
            let colorID = $(this).data('color');
            let url = '/test';

            _this.request(url, colorID, productId);
        })
    }

    /**
     * Change product by colour ajax request
     */
    request(url, colorID, productId){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                productId: productId,
                color_id: colorID,
                _token: this.token
            },
            success: this.success
        });

    }

    /**
     * On success request
     */
    success(data) {
        let info = JSON.parse(data);
        console.log(info[1]);

        $('.js_sizes-blk').html('');

        $(info[1]).each(function (i, el) {
            $('.js_sizes-blk').append(
              ` <div class="product-s-i">
                    <input type="radio" name="size" id="size_${i}" class="product-s-inp">
                     <label for="size_${i}" class="product-s-inp-lbl js_sizes">${el}</label>
                </div>`
            );
        })
    }

}