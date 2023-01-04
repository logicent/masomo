<?php

use crudle\ext\school\models\SchoolCurriculum;

echo $this->render('@appMain/views/_form_table/item', [
    'modelClass' => SchoolCurriculum::class,
]);