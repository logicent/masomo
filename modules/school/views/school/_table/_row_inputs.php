<?php

use crudle\app\main\helpers\App;
use icms\FomanticUI\Elements;
use icms\FomanticUI\modules\Checkbox;
use yii\helpers\Html;
?>
<tr>
    <td class="select-row center aligned">
        <?= Checkbox::widget([
                'name' => "[$rowId]name",
                'options' => ['style' => 'vertical-align: text-top; width: 17px']
            ]) ?>
    </td>
    <td>
        <?= Html::activeTextInput($model, "[$rowId]name") ?>
    </td>
    <td class="one wide center aligned">
        <?= Html::a(Elements::icon('grey pencil'), null, [
                'class' => 'edit-row compact ui small basic icon button',
                'style' => 'margin: 0em;',
                'data' => [
                    'model-class' => App::className($model),
                    'modal-form' => '@extModules/school/views/school/_table/field_inputs',
                ]
            ]) ?>
    </td>
</tr>