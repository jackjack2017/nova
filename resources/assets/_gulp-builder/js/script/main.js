import { Slider } from '../libs/slider';
import {ui} from './ui';
import {Sendform} from '../libs/sendform/sendform2';
import {getToken} from "../libs/getToken";
import {ChangeProductRequest} from "./changeProductRequest";
import {ShowMoreRequest} from "./showMoreRequest";
import {CartRequest} from "./cartRequest";
import {LikeRequest} from "./likeRequest";
import { amount } from './amount';
import {MfPopup} from '../libs/popup/mfpopup';

$( document ).ready(function() {
    if(NODE_ENV === 'dev'){
        console.log('its dev mode use prod mode for production');
    }
    let projectApp = new App();
    global.app = projectApp;
    projectApp.init();
});


class App{
    // Define global visible variable inside app
    constructor(){}
    init(){
        //used in Product slider block (Product page)
        ui.galleryPopupInit('.js_gallery-product');
        ui.tabsInit('.js_ui-tab-nav', '.js_ui-tabs-cnt', '.js_ui-tabs');
        ui.initPhoneMask();
        ui.accordion('.js_deal-detail-btn', '.js_deal-detail-blk');
        amount.init('.js_ui-amount-inp', '.js_ui-amount-btn-dec', '.js_ui-amount-btn-inc');
        $('.my-container').sortablePhotos({
            selector: '> .my-item',
            sortable: true,
            padding: 2
        });
        $('.js_select').select2({
            placeholder: 'Выбор перевозчика',
            minimumResultsForSearch: Infinity
        });
        $('.js_select-payment').select2({
            placeholder: 'Выбор способа оплаты',
            minimumResultsForSearch: Infinity
        });

        new MfPopup('.js_mfpopup-popup-success');

        $('body').on('change', '.js_delivery', function () {
            let deliveryForm = $('.js_delivery').val() + '';
            let allrequiredFields = $('.js_required-field');
            let currentRequiredFields = $(deliveryForm).find('.js_required-field');

            $(allrequiredFields).each(function (i, el) {
                el.required = false;
            });

            $('.js_delivery-form').hide();
            $(deliveryForm).slideDown().css('display', 'flex');


            $(currentRequiredFields).each(function (i, el) {
                el.required = true;
            });

        });

        this.sendFormInit();

        let changeProductRequest = new ChangeProductRequest;
        changeProductRequest.init();

        let cartRequest = new CartRequest;
        cartRequest.init();

        let likeRequest = new LikeRequest;
        likeRequest.init();

        let requestProducts = new ShowMoreRequest({
            url: '/product/test',
            method: 'POST',
            btnClass: '.js_showMore-btn',
            blockClass: '.js_showMore-blk'
        });

        requestProducts.init();

        new Slider('.js_slider-main', {
            nav: true,
            dots: true,
            items: 4,
            margin: 10
        });

        new Slider('.js_slider-main-big', {
            nav: true,
            dots: true,
            items: 6,
            margin: 10
        });

        new Slider('.js_slider-product', {
            nav: false,
            dots: true,
            items: 1,
            touchDrag: false,
            mouseDrag: false,
            dotsContainer: '.js_product-slider-dots-container'
        });
    }

    sendFormInit(){

        //used in the order form of the site
        let formDeal = new Sendform('.js_sendform-form-deal', {
            success: successSend
        });

        function successSend() {
            ui.openPopup('#modal-success');
        }
    }
}; 