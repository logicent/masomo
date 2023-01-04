<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\SchoolActivity;
use crudle\ext\school\models\search\SchoolActivitySearch;

class SchoolActivityController extends CrudController
{
    public function modelClass(): string
    {
        return SchoolActivity::class;
    }

    public function searchModelClass(): string
    {
        return SchoolActivitySearch::class;
    }
}
