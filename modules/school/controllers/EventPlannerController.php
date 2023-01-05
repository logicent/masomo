<?php

namespace crudle\ext\school\controllers;

use crudle\app\main\controllers\base\ViewController;
use crudle\ext\school\models\EventPlanner;

class EventPlannerController extends ViewController
{
    public function modelClass(): string
    {
        return EventPlanner::class;
    }
}
