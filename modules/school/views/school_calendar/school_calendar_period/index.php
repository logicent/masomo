<?php

use crudle\ext\school\models\SchoolCalendarPeriod;

echo $this->render('@appMain/views/_form_table/item', [
    'modelClass' => SchoolCalendarPeriod::class,
]);