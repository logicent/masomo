<?php

namespace crudle\ext\school\controllers;

use crudle\app\crud\controllers\CrudController;
use crudle\ext\school\models\Sponsor;
use crudle\ext\school\models\search\SponsorSearch;

class SponsorController extends CrudController
{
    public function modelClass(): string
    {
        return Sponsor::class;
    }

    public function searchModelClass(): string
    {
        return SponsorSearch::class;
    }
}
