<?php

$this->title = Yii::t('app', 'Main');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Main'), 'url' => ['/main']];

$menuList = require __DIR__ . '/_menu.php';

echo $this->render('@appMain/layouts/_nav/_menu_in_view', ['menuList' => $menuList]);