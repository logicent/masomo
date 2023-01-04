<?php

use crudle\app\main\enums\Status_Active;
use crudle\ext\school\enums\Type_Duration_Measure;

?>
<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $form->field($model, 'id') ?>
            <?= $this->render('@appMain/views/_form_field/dropdown', [
                'model' => $model,
                'attribute' => 'unit_measure',
                'form' => $form,
                'list' => Type_Duration_Measure::enums()
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/dropdown', [
                'model' => $model,
                'attribute' => 'status',
                'form' => $form,
                'list' => Status_Active::enums()
                ]) ?>
            <?= $this->render('@appMain/views/_form_field/checkbox', [
                'model' => $model,
                'attribute' => 'is_learning_period',
                'form' => $form,
                'label' => '&nbsp;'
            ]) ?>
        </div>
    </div>
</div>