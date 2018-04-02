import {getToken} from "../libs/getToken";


export class SortingRequest{

    constructor(method = 'POST'){

        this.method = method;
        this.token = getToken();
        this.blkClass = '.js_sorting-blk';
    }


    init(){

        let _this = this;

        $('body').on('click', '.js_sorting-btn', function(event) {
            event.preventDefault();

            let sortingID = $(this).data('sort');
            let categoryID = $(this).closest('.js_category').data('id');
            let sortingBtn = $('.js_sorting-btn');
            let url = '/test';

            $(sortingBtn).removeClass('__active');
            if($(this).hasClass('__active')){
                return
            }

            _this.requestSorting(url, categoryID, sortingID);
            $(this).addClass('__active');
        });

    }

    requestSorting(url, categoryID, sortingID){
        $.ajax({
            url: url,
            method: this.method,
            data: {
                category_id: categoryID,
                sorting_id: sortingID,
                _token: this.token
            },
            success(data){
                $(_this.blkClass).append(data);
            }
        });
    }
}