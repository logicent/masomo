<?php

use icms\FomanticUI\modules\Checkbox;

$defaultOptions = [
    'style' => 'vertical-align: text-top'
];
$options = isset($options) ? array_merge($defaultOptions, $options) : $defaultOptions;

if (isset($form)) :
    $field = $form->field($model, $attribute)->checkbox($options);
    if (isset($label)) :
        $field->label($label);
    endif;
else :
    $field = Checkbox::widget([
        'model' => $model,
        'attribute' => $attribute,
        'labelOptions' => isset($labelOptions) ? $labelOptions : [],
        'inputOptions' => ['data' => ['name' => $attribute]],
        'options' => $options
    ]);
endif;

echo $field;