<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Teacher;
use crudle\ext\school\models\search\TeacherSearch;

class TeacherController extends CrudController
{
    public function modelClass(): string
    {
        return Teacher::class;
    }

    public function searchModelClass(): string
    {
        return TeacherSearch::class;
    }
}
