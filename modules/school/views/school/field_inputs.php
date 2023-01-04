<div class="ui padded segment">
    <div class="ui two column grid">
        <div class="column">
            <?= $form->field($model, 'name')->textInput(['maxlength' => 140]) ?>
            <?= $form->field($model, 'email_address')->textInput(['maxlength' => 140]) ?>
            <?= $this->render('@appMain/views/_form_field/date_input', [
                        'model' => $model,
                        'attribute' => 'established',
                        'form' => $form
                    ]) ?>
        </div>
        <div class="column">
            <?= $form->field($model, 'id')->textInput(['maxlength' => 140]) ?>
            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 140]) ?>
        </div>
    </div>
</div>

<?php /*= $this->render('@appMain/views/_form/_section', [
    'title'         => $model->getAttributeLabel('schoolSyllabus'),
    'content'       => $this->render('school_syllabus/index'),
    'collapsible'   => true,
    'expanded'      => true,
]) */?>

<?= $this->render('@appMain/views/_form/_section', [
    'title'         => $model->getAttributeLabel('schoolCurriculum'),
    'content'       => $this->render('school_curriculum/index'),
    'collapsible'   => true,
    'expanded'      => true,
]) ?>

<?= $this->render('@appMain/views/_form/_section', [
    'title'         => $model->getAttributeLabel('schoolLevel'),
    'content'       => $this->render('school_level/index'),
    'collapsible'   => true,
    'expanded'      => true,
]);