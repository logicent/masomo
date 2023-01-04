<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\StudentGroup;
use crudle\ext\school\models\search\StudentGroupSearch;

class StudentGroupController extends CrudController
{
    public function modelClass(): string
    {
        return StudentGroup::class;
    }

    public function searchModelClass(): string
    {
        return StudentGroupSearch::class;
    }
}
