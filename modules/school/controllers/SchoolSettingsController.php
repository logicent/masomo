<?php

namespace crudle\ext\school\controllers;

use crudle\app\setting\controllers\base\SettingsController;
use crudle\ext\school\forms\SchoolSettingsForm;

class SchoolSettingsController extends SettingsController
{
    public function modelClass(): string
    {
        return SchoolSettingsForm::class;
    }
}
