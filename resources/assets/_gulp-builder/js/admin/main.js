//jquery-ui
import '../libs/jquery-ui';

//sortable photos
import '../../bower_components/jquery-sortable-photos/jquery-sortable-photos';

//dropzone
import '../libs/dropzone/dropzone.min';

import qq from 'fine-uploader'


// $("#myDropzone").dropzone({
//
//     url: 'admin/products',
//     autoProcessQueue: false,
//     uploadMultiple: true,
//     parallelUploads: 5,
//     maxFiles: 5,
//     maxFilesize: 10,
//     acceptedFiles: '.jpg',
//     addRemoveLinks: true,
//     init: function() {
//         let _this = this;
//
//         // for Dropzone to process the queue (instead of default form behavior):
//         $('body').on('click', '.js_sendAll', function (e) {
//             e.preventDefault();
//             e.stopPropagation();
//             _this.processQueue();
//         });
//
//         //send all the form data along with the files:
//         this.on("sendingmultiple", function(data, xhr, formData) {
//             formData.append("name", jQuery("input[type='name']").val());
//             console.log(formData);
//             // formData.append("lastname", jQuery("#lastname").val());
//             console.log(this);
//         });
//     }
// });

let el = $('#uploader');
$(el).closest('form').attr('id', 'qq-form');

let uploader = new qq.FineUploader({
    element: document.getElementById("uploader"),
    request: {
        endpoint: '/admin/products'
    }
});



$('body').on('click', '.js_options-btn', function (e) {
    e.preventDefault();

    let optionsBlk = $(this).closest('.js_options-blk');
    let optionsForCopy = $(optionsBlk).find('.js_copy').first();
    $( optionsForCopy).clone().appendTo( optionsBlk);
});





