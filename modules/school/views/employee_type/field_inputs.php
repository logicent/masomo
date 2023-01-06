<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $form->field($model, 'id') ?>
            <?= $this->render('@appMain/views/_form_field/checkbox', [
                'model' => $model,
                'attribute' => 'is_group',
                'form' => $form,
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/checkbox', [
                'model' => $model,
                'attribute' => 'status',
                'form' => $form,
                'label' => '&nbsp;'
            ]) ?>
        </div>
    </div>
</div>