<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\TeacherAttendance;
use crudle\ext\school\models\search\TeacherAttendanceSearch;

class TeacherAttendanceController extends CrudController
{
    public function modelClass(): string
    {
        return TeacherAttendance::class;
    }

    public function searchModelClass(): string
    {
        return TeacherAttendanceSearch::class;
    }
}
