<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\CalendarPeriodType;
use crudle\ext\school\models\search\CalendarPeriodTypeSearch;

class CalendarPeriodTypeController extends CrudController
{
    public function modelClass(): string
    {
        return CalendarPeriodType::class;
    }

    public function searchModelClass(): string
    {
        return CalendarPeriodTypeSearch::class;
    }
}
