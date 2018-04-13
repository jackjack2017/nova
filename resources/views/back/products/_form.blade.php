

<div class="row">
    <div class="col-xs-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Основное</a></li>
                <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">Описание</a></li>
                <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">Опции</a></li>
                <li><a href="#tab_4" data-toggle="tab" aria-expanded="false" class="tab_4">Галерея</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-md-4">
                            {!! $form->checkbox('active', 'Активный', null, isset($product) ? $product->active : false) !!}
                        </div>
                        <div class="col-md-4">
                            {!! $form->checkbox('top', 'Топ',  null, isset($product) ? $product->top : false) !!}
                        </div>
                        <div class="col-md-4">
                            {!! $form->checkbox('new', 'Новый',  null, isset($product) ? $product->new : false) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            {!! $form->text('name', null, 'Название') !!}
                        </div>
                        <div class="col-md-2">
                            {!! $form->select('gender', ['Мужской', 'Женский', "Дети"], null, 'Пол') !!}
                        </div>
                        <div class="col-md-4">
                            {!! $form->text('article', $product->article, 'Артикул') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->select('category_id', $categories, null, 'Категория') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            {!! $form->text('price', null, 'Цена') !!}
                        </div>
                        <div class="col-md-3">
                            {!! $form->text('price_with_discount', null, 'Цена со скидкой') !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            {!! $form->text('discount', null, 'Скидка') !!}
                        </div>
                        <div class="col-md-3">
                            {!! $form->select('discount_type', ['денежная', 'процентная'], null, 'Тип скидки') !!}
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->text('brand', null, 'Бренд') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->text('season', null, 'Сезон') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->text('style', null, 'Стиль') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->text('textile', null, 'Текстиль') !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $form->textarea('description', null, 'Описание') !!}
                        </div>
                        <div class="col-md-6">
                            {!! $form->textarea('comment', null, 'Комментарий') !!}
                        </div>
                    </div>
                </div>

                <div class="tab-pane js_options-blk" id="tab_3">
                    <div class="row">
                        <div class="col-md-4 pull-right">
                            <button type="button" class="btn btn-success pull-right js_options-btn"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="row js_copy">
                        <div class="col-md-4 ">
                            {!! $form->select('color', ['black' => 'черный', 'red' => 'красный', 'green' => 'зеленый'], $product->color, 'Цвет') !!}
                        </div>
                        <div class="col-md-4">
                            {!! $form->text('size', $product->size, 'Размер') !!}
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_4">
                    <div class="js_uploader"
                         data-itemLimit="2"
                         data-sizeLimit="1000"
                         data-request-endpoint="/dashboard/blog/test"
                         data-deleteFile-endpoint="/dashboard/blog/test"
                         data-deleteFile-enabled="true">
                    </div>
                    <script type="text/template" id="qq-template">
                        <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
                            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
                            </div>
                            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                                <span class="qq-upload-drop-area-text-selector"></span>
                            </div>
                            <div class="qq-upload-button-selector qq-upload-button">
                                <div>Upload a file</div>
                            </div>
                            <span class="qq-drop-processing-selector qq-drop-processing">
            <span>Processing dropped files...</span>
            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
        </span>
                            <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
                                <li>
                                    <div class="qq-progress-bar-container-selector">
                                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                                    </div>
                                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                                    <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                                    <span class="qq-upload-file-selector qq-upload-file"></span>
                                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                                    <span class="qq-upload-size-selector qq-upload-size"></span>
                                    <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                                </li>
                            </ul>

                            <dialog class="qq-alert-dialog-selector">
                                <div class="qq-dialog-message-selector"></div>
                                <div class="qq-dialog-buttons">
                                    <button type="button" class="qq-cancel-button-selector">Close</button>
                                </div>
                            </dialog>

                            <dialog class="qq-confirm-dialog-selector">
                                <div class="qq-dialog-message-selector"></div>
                                <div class="qq-dialog-buttons">
                                    <button type="button" class="qq-cancel-button-selector">No</button>
                                    <button type="button" class="qq-ok-button-selector">Yes</button>
                                </div>
                            </dialog>

                            <dialog class="qq-prompt-dialog-selector">
                                <div class="qq-dialog-message-selector"></div>
                                <input type="text">
                                <div class="qq-dialog-buttons">
                                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                                    <button type="button" class="qq-ok-button-selector">Ok</button>
                                </div>
                            </dialog>
                        </div>
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary pull-right js_sendAll">Сохранить</button>
</div>

