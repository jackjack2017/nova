
// $('body').on('click', '.js_options-btn', function (e) {
//     e.preventDefault();
//
//     let optionsBlk = $(this).closest('.js_options-blk');
//     let optionsForCopy = $(optionsBlk).find('.js_copy').first();
//     $( optionsForCopy).clone().appendTo( optionsBlk);
// });
//JQuery
require('expose?$!expose?jQuery!jquery');

//jquery-ui
import '../../bower_components/jquery-ui/jquery-ui.min';

import {Uploader} from "../libs/uploader";

//Fine Uploader
function uploaderInit(){
    let $uploader  = $('.js_uploader');
    if(!$uploader.length) {
        return;
    }

    // each element init
    $uploader.each((i, el)=>{

        let uploader = new Uploader({
            element: el,
            availableOptionsFromDataAttr : [
                'itemLimit',
                'request-endpoint',
                'deleteFile-endpoint',
                'deleteFile-enabled',
                'sizeLimit'
            ]
        });

        uploader.init();
    });
}

uploaderInit();


