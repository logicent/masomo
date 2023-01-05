<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\SchoolEvent;
use crudle\ext\school\models\search\SchoolEventSearch;

class SchoolEventController extends CrudController
{
    public function modelClass(): string
    {
        return SchoolEvent::class;
    }

    public function searchModelClass(): string
    {
        return SchoolEventSearch::class;
    }
}
