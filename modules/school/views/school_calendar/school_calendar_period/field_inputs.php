<?php

use yii\helpers\Html;
use icms\FomanticUI\Elements;
use icms\FomanticUI\widgets\ActiveForm;

$hintOptions = [
    'tag' => 'div',
    'class' => 'text-muted',
    'style' => 'font-size: 0.95em; padding-left: 0.25em'
];

$form = ActiveForm::begin([
    'id' => $rowId . '__modal',
    'action' => false,
    'enableClientValidation' => false,
    'fieldConfig' => ['hintOptions' => $hintOptions],
    'options' => [
        'autocomplete' => 'off',
        'class' => 'ui form',
    ],
]) ?>
<div class="ui header" style="margin-top: 0em"><?= Yii::t('app', 'Edit') ?></div>
<div class="ui padded segment">
    <div class="ui two column stackable grid">
        <div class="column">
            <?= Html::activeHiddenInput($model, "[$rowId]id") ?>
            <?= $form->field($model, "[$rowId]name")->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="ui two column grid">
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => "[$rowId]start_date",
                'form' => $form,
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => "[$rowId]end_date",
                'form' => $form,
            ]) ?>
        </div>
    </div>
</div>
<?= Elements::button('Update', [
        'class' => 'compact small update-row',
        'data'  => [
            'row-id' => $rowId
        ]
    ]);
ActiveForm::end();