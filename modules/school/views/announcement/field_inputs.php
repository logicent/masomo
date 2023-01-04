<?php

use crudle\ext\school\enums\Status_Announcement;
?>
<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/textarea', [
                'model' => $model,
                'attribute' => 'description',
                'form' => $form
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => 'date_posted',
                'form' => $form
            ]) ?>
            <?= $this->render('@appMain/views/_form_field/dropdown', [
                'model' => $model,
                'attribute' => 'status',
                'form' => $form,
                'list' => Status_Announcement::enums()
            ]) ?>
            <?= $this->render('@appMain/views/_form_field/checkbox', [
                'model' => $model,
                'attribute' => 'action_required',
                'form' => $form,
                'label' => '&nbsp;'
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/textarea', [
                'model' => $model,
                'attribute' => 'target_audience',
                'form' => $form
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/textarea', [
                'model' => $model,
                'attribute' => 'action_description',
                'form' => $form
            ]) ?>
        </div>
    </div>
</div>