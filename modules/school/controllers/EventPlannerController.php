<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\EventPlanner;
use crudle\ext\school\models\search\EventPlannerSearch;

class EventPlannerController extends CrudController
{
    public function modelClass(): string
    {
        return EventPlanner::class;
    }

    public function searchModelClass(): string
    {
        return EventPlannerSearch::class;
    }
}
