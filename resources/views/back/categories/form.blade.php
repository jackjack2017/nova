<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-md-4">
                {!! $form->text('name', null, 'Название') !!}
            </div>
            <div class="col-md-4">
                {!! $form->checkbox('active',  'Активный', null, isset($category) ? $category->active : false) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! $form->textarea('description', null, 'Описание') !!}
            </div>
        </div>
    </div>
</div>

<div class="box-footer">
    <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
</div>


