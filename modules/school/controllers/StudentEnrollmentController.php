<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\StudentEnrollment;
use crudle\ext\school\models\search\StudentEnrollmentSearch;

class StudentEnrollmentController extends CrudController
{
    public function modelClass(): string
    {
        return StudentEnrollment::class;
    }

    public function searchModelClass(): string
    {
        return StudentEnrollmentSearch::class;
    }
}
