<?php

$menuList = require __DIR__ . '/_menu.php';

echo $this->render('@appMain/layouts/_nav/_menu_in_view', ['menuList' => $menuList]);