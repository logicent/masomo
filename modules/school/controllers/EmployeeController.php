<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Employee;
use crudle\ext\school\models\search\EmployeeSearch;

class EmployeeController extends CrudController
{
    public function modelClass(): string
    {
        return Employee::class;
    }

    public function searchModelClass(): string
    {
        return EmployeeSearch::class;
    }
}
