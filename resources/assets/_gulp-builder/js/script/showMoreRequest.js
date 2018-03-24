import {getToken} from "../libs/getToken"


export class ShowMoreRequest{

    /**
     * Send request to get data and append data according to the show more functionality
     *
     * @param settings{object} - param for set up
     */
    constructor(settings){

        //make a token for secure data sending
        let token = getToken();

        // default settings
        let defaultSettings = {
            url: '',
            method: 'POST',
            btnClass: '',
            blockClass: '',
            params:{
                qty: 12,
                page:2,
                _token: token
            },
            success: this.success
        };

        // all object's settings (if there are no users settings the default)
        this.settings = Object.assign({}, defaultSettings , settings);

        this.url = this.settings.url;
        this.method = this.settings.method;
        this.blockClass = this.settings.blockClass;
        this.btnClass = this.settings.btnClass;

        this.successFn = this.settings.success;

        this.params = Object.assign({}, defaultSettings.params, this.settings.params);
    }


    /**
     * Init btn
     */
    init(){

        let _this = this;

        $('body').on('click', this.btnClass, function (event) {
            event.preventDefault();
            _this.request();
        })
    }

    /**
     * Sending ajax request
     */
    request(){
        let _this = this;
        $.ajax({
            url: this.url,
            data: this.params,
            method: this.method,
            success: function(data){
                $(this.blockClass).append(data);  
                _this.params.page ++;
            }
        })
    }
}