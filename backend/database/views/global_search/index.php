<?php

use icms\FomanticUI\widgets\ActiveForm;
use crudle\app\main\models\setup\GeneralSettingsForm;
use yii\helpers\Html;
use icms\FomanticUI\Elements;

$this->title = Yii::t('app', 'General Settings');

$form = ActiveForm::begin([
        'id' => $model->formName(),
        'options' => [
            'autocomplete' => 'off',
            'class' => 'ui form ajax-submit',
        ],
    ]) ?>

    <?= $this->render('/_form/_header', ['model' => $model]) ?>

    <div class="ui bottom attached segment">
        <div class="ui one column stackable grid">
            <div class="column center aligned">
            <?php Html::tag('div', Html::activeLabel($model, 'bgImagePath'), ['class' => 'field']) ?>
                <?php Html::a(Elements::image($model->bgImagePath != '' ? 
                                    Yii::getAlias('@web/uploads/') . $model->bgImagePath : 
                                    Yii::getAlias('@web') . '/img/image-ph-220.jpg',
                                ['class' => 'medium bordered rounded']),
                            ['#'],
                            ['id' => 'bg_image', 'class' => 'ui small image']) ?>
                <div class="ui transparent input">
                    <?php Html::activeHiddenInput($model, 'bgImagePath', ['readonly' => true]) ?>
                </div>

                <div class="ui hidden divider"></div>

                <?= $this->render('@appMain/views/_form_field/file_input', [
                                        'allowMultiple' => false,
                                        'fileTypes' => 'image/*',
                                        'form' => $form,
                                        'model' => $model,
                                    ]) ?>
            </div>
        </div>
    </div>

<?php 
ActiveForm::end();
$this->registerJs($this->render('/_form/_submit.js'));
?>