<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\LearningActivity;
use crudle\ext\school\models\search\LearningActivitySearch;

class LearningActivityController extends CrudController
{
    public function modelClass(): string
    {
        return LearningActivity::class;
    }

    public function searchModelClass(): string
    {
        return LearningActivitySearch::class;
    }
}
