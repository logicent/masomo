<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Student;
use crudle\ext\school\models\search\StudentSearch;

class StudentController extends CrudController
{
    public function modelClass(): string
    {
        return Student::class;
    }

    public function searchModelClass(): string
    {
        return StudentSearch::class;
    }
}
