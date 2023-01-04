<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\SchoolTeam;
use crudle\ext\school\models\search\SchoolTeamSearch;

class SchoolTeamController extends CrudController
{
    public function modelClass(): string
    {
        return SchoolTeam::class;
    }

    public function searchModelClass(): string
    {
        return SchoolTeamSearch::class;
    }
}
