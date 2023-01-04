<?php

use crudle\app\main\helpers\App;
use icms\FomanticUI\Elements;
use icms\FomanticUI\modules\Checkbox;
use yii\helpers\Html;
?>
<tr>
    <td class="select-row center aligned">
        <?= Checkbox::widget([
                'name' => "[$rowId]id",
                'options' => ['style' => 'vertical-align: text-top; width: 17px']
            ]) ?>
    </td>
    <td>
        <?= Html::activeHiddenInput($model, "[$rowId]id") ?>
        <?= Html::activeTextInput($model, "[$rowId]name") ?>
    </td>
    <td>
        <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => "[$rowId]start_date",
            ]) ?>
    </td>
    <td>
        <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => "[$rowId]end_date",
            ]) ?>
    </td>
    <td>
        <?= Html::activeTextInput($model, "[$rowId]duration", ['readonly' => true]) ?>
    </td>
    <td class="center aligned">
        <?= Checkbox::widget([
                'name' => "[$rowId]is_learning_period",
                'options' => ['style' => 'vertical-align: text-top; width: 17px']
            ]) ?>
    </td>
    <td class="one wide center aligned">
        <?= Html::a(Elements::icon('grey pencil'), null, [
                'class' => 'edit-row compact ui small basic icon button',
                'style' => 'margin: 0em;',
                'data' => [
                    'model-class' => App::className($model),
                    'modal-form' => '@extModules/school/views/school_calendar/school_calendar_period/field_inputs',
                ]
            ]) ?>
    </td>
</tr>