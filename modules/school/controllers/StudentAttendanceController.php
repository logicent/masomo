<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\StudentAttendance;
use crudle\ext\school\models\search\StudentAttendanceSearch;

class StudentAttendanceController extends CrudController
{
    public function modelClass(): string
    {
        return StudentAttendance::class;
    }

    public function searchModelClass(): string
    {
        return StudentAttendanceSearch::class;
    }
}
