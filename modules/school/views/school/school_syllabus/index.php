<?php

use crudle\ext\school\models\SchoolSyllabus;

echo $this->render('@appMain/views/_form_table/item', [
    'modelClass' => SchoolSyllabus::class,
]);