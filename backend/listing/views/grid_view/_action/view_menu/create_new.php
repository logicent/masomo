<?php

use icms\FomanticUI\Elements;
use yii\helpers\Url;

// if ( Yii::$app->user->can(Type_Permission::Create .' '. $controller->viewName()) ) :
    echo Elements::button(Yii::t('app', 'New'), [
            'id' => 'create_btn',
            'class' => 'compact primary',
            'data' => [
                'hx-get' => Url::to(['create']),
                'hx-target' => '#content',
                'hx-swap' => 'innerHtml',
                'hx-push-url' => 'true',
                // pre-select-modal options
                // 'pre-select-modal' => $model->requirePreselectModal ? 'true' : 'false'
            ],
        ]);
// endif;