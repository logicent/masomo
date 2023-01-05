<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\EmployeeType;
use crudle\ext\school\models\search\EmployeeTypeSearch;

class EmployeeTypeController extends CrudController
{
    public function modelClass(): string
    {
        return EmployeeType::class;
    }

    public function searchModelClass(): string
    {
        return EmployeeTypeSearch::class;
    }
}
