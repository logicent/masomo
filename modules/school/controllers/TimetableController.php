<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Timetable;
use crudle\ext\school\models\search\TimetableSearch;

class TimetableController extends CrudController
{
    public function modelClass(): string
    {
        return Timetable::class;
    }

    public function searchModelClass(): string
    {
        return TimetableSearch::class;
    }
}
