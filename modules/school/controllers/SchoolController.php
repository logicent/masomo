<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\School;
use crudle\ext\school\models\search\SchoolSearch;

class SchoolController extends CrudController
{
    public function modelClass(): string
    {
        return School::class;
    }

    public function searchModelClass(): string
    {
        return SchoolSearch::class;
    }

    // public function showViewSidebar(): bool
    // {
    //     return false;
    // }
}
