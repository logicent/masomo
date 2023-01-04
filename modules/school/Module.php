<?php

namespace crudle\ext\school;

use Yii;

/**
 * school module definition class
 */
class Module extends \crudle\app\Module
{
    public $moduleName = 'School';

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'crudle\ext\school\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        Yii::configure($this, require __DIR__ . '/config.php');
    }

    /**
     * {@inheritdoc}
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
            $app->getUrlManager()->addRules([
                ['class' => $this->urlRule, 'pattern' => '/app/admin', 'route' => '/main/main/index'],
                ['class' => $this->urlRule, 'pattern' => '/app/school', 'route' => $this->id . '/school-view/index'],
                ['class' => $this->urlRule, 'pattern' => '/app/school/<controller>', 'route' => $this->id . '/<controller>/index'],
            ], false);
        }
    }
}
