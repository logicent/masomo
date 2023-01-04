<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\ActivityType;
use crudle\ext\school\models\search\ActivityTypeSearch;

class ActivityTypeController extends CrudController
{
    public function modelClass(): string
    {
        return ActivityType::class;
    }

    public function searchModelClass(): string
    {
        return ActivityTypeSearch::class;
    }
}
