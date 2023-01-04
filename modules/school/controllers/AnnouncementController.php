<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Announcement;
use crudle\ext\school\models\search\AnnouncementSearch;

class AnnouncementController extends CrudController
{
    public function modelClass(): string
    {
        return Announcement::class;
    }

    public function searchModelClass(): string
    {
        return AnnouncementSearch::class;
    }
}
