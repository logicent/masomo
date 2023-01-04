<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\SchoolCalendar;
use crudle\ext\school\models\search\SchoolCalendarSearch;

class SchoolCalendarController extends CrudController
{
    public function modelClass(): string
    {
        return SchoolCalendar::class;
    }

    public function searchModelClass(): string
    {
        return SchoolCalendarSearch::class;
    }
}
