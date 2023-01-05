<?php

use crudle\ext\school\models\Student;
?>
<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/select', [
                'model' => $model,
                'attribute' => 'person_name',
                'form' => $form,
                'list' => [
                    'modelClass' => Student::class,
                    'keyAttribute' => 'id',
                    'valueAttribute' => 'title'
                ]
            ]) ?>
        </div>
        <div class="column">
            <?= $this->render('@appMain/views/_form_field/date_input', [
                'model' => $model,
                'attribute' => 'school_day',
                'form' => $form
            ]) ?>
        </div>
    </div>
</div>