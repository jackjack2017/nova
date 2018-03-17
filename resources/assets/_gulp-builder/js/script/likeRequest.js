import {getToken} from "../libs/getToken";


export class LikeRequest{

    constructor(method = 'POST'){

        this.method = method;
        this.token = getToken();
    }

    /**
     * Init btn
     */
    init(){

        let _this = this;

        $('body').on('click', '.js_like-btn', function(event) {
            event.preventDefault();
            let productID = $(this).closest('.product-card').data('id');
            let url = '/like/add';
            _this.requestAdd(url, productID);
        });

        $('body').on('click','.js_like-btn-remove', function(event) {
            event.preventDefault();
            console.log('yeaahh');
            let item_id = $(this).closest('.like-product-card').data('item-id');
            let url = '/like/remove';
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
            success(data){
                console.log('success');
                let likeCount = +$('.js_like-count').html();
                $('.js_like-count').empty();
                $('.js_like-count').append(likeCount++);
            },
            error(){
                console.log('error');
                let likeCount = +$('.js_like-count').html();
                console.log(likeCount++);
                $('.js_like-count').empty();
                $('.js_like-count').append(likeCount++);
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
            success(data){
                console.log('success');
            },
            error(){
                console.log('error');
            }
        });

    }

    /**
     * On success request
     */
    // success(data) {
    //    console.log(data);
    // }

}