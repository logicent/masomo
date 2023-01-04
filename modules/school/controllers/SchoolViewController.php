<?php

namespace crudle\ext\school\controllers;

use crudle\app\main\controllers\base\ViewController;
use crudle\app\main\enums\Type_View;

/**
 * SchoolView controller for the `school` module
 */
class SchoolViewController extends ViewController
{
    public function actions()
    {
        return [
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    // ViewInterface
    public function defaultActionViewType()
    {
        return Type_View::Workspace;
    }

    public function showViewSidebar(): bool
    {
        return true;
    }
}
