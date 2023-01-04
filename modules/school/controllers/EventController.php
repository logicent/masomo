<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Event;
use crudle\ext\school\models\search\EventSearch;

class EventController extends CrudController
{
    public function modelClass(): string
    {
        return Event::class;
    }

    public function searchModelClass(): string
    {
        return EventSearch::class;
    }
}
