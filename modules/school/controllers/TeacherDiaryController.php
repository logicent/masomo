<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\TeacherDiary;
use crudle\ext\school\models\search\TeacherDiarySearch;

class TeacherDiaryController extends CrudController
{
    public function modelClass(): string
    {
        return TeacherDiary::class;
    }

    public function searchModelClass(): string
    {
        return TeacherDiarySearch::class;
    }
}
