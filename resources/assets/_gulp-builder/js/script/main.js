import { Slider } from '../libs/slider';
import {ui} from './ui';
import {getToken} from "../libs/getToken";
import {ChangeProductRequest} from "./changeProductRequest";
import {ShowMoreRequest} from "./showMoreRequest";

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

        let changeProductRequest = new ChangeProductRequest;
        changeProductRequest.init();

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

        new Slider('.js_slider-product', {
            nav: false,
            dots: true,
            items: 1,
            touchDrag: false,
            mouseDrag: false,
            dotsContainer: '.js_product-slider-dots-container'
        });

        $('#tab_4').on('click',function () {
            console.log('click');
        })
    }
}; 