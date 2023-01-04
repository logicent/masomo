<?php

use crudle\ext\school\models\School;
?>
<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $form->field($model, 'academic_year')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/select', [
                'model' => $model,
                'attribute' => 'school_id',
                'form' => $form,
                'list' => [
                    'modelClass' => School::class,
                    'keyAttribute' => 'id',
                    'valueAttribute' => 'name',
                ]
            ]) ?>
        </div>
    </div>
    <div class="ui two column grid">
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => 'start_date',
                'form' => $form
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => 'end_date',
                'form' => $form
            ]) ?>
        </div>
    </div>
</div>

<?= $this->render('@appMain/views/_form/_section', [
    'title'         => $model->getAttributeLabel('schoolCalendarPeriod'),
    'content'       => $this->render('school_calendar_period/index'),
    'collapsible'   => true,
    'expanded'      => true,
]) ?>