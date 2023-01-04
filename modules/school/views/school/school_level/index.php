<?php

use crudle\ext\school\models\SchoolLevel;

echo $this->render('@appMain/views/_form_table/item', [
    'modelClass' => SchoolLevel::class,
]);