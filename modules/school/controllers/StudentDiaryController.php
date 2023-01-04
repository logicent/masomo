<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\StudentDiary;
use crudle\ext\school\models\search\StudentDiarySearch;

class StudentDiaryController extends CrudController
{
    public function modelClass(): string
    {
        return StudentDiary::class;
    }

    public function searchModelClass(): string
    {
        return StudentDiarySearch::class;
    }
}
