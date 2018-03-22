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

            if($(this).hasClass('__active')){
                $(this).removeClass('__active');
                $(this).html('В избранное');
                _this.requestRemove(url, productID);

                if($('body').hasClass('page-favourite')){

                    let favouriteCard = $(this).closest('.like-product-card'); 
                    $(favouriteCard).remove();
                }

                return
            }

            $(this).addClass('__active');
            $(this).html('Убрать из избранного');
            _this.requestAdd(url, productID);
        });

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
            success(){
                console.log('success');

                let likeCount = $('.js_like-count').html();
                $('.js_like-count').html(+likeCount++);
            }
        });
    }

    requestRemove(url, productId){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                product_id: productId,
                _token: this.token
            },
            success(){
                console.log('success');

                let likeCount = $('.js_like-count').html();
                $('.js_like-count').html(+likeCount--);
            }
        });

    }
}