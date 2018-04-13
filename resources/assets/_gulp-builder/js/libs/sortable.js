import {getToken} from './getToken';
import {alerts} from './alerts';

export let sortable = {
    init(){
        $('.js-sortable-without-handler').sortable({
            connectWith: '.js-sortable-i',
            'ui-floating': 'auto',
            axis: 'y',
            key: "sort",
            deactivate: function( event, ui ) {
                    let parentEl = ui.item[0].offsetParent;
                    let url_route = $(parentEl).data('url');
                    let method = $(parentEl).data('method');

                    if (method == undefined){
                        method = 'POST';
                    }
                    
                    let referense_id = ui.item[0].id;

                    let $new_referense_id = $('#' + referense_id);

                    let prevEllength = $new_referense_id.prev().length;

                    let referense_entity_id = $new_referense_id.prev().attr('id');
                    let elPosition = 'before';

                    if (prevEllength === 0) {
                        elPosition = 'after';
                        referense_entity_id = $('#' + referense_id).next().attr('id');
                    }

                    $.ajax({
                    method: method,
                    url: url_route, 
                    data: { 'entity_id': referense_id ,'reference_entity_id': referense_entity_id, 'reference_type': elPosition, _token: getToken() },
                    success: function(data) {
                        alerts.success('', 'Данные успешно сохранены.');
                    },
                    error: function(){
                        alerts.error('Ошибка!', 'Возникли проблемы');
                    }
                });
            }
        });
    }
};