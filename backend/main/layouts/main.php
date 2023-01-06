<?php

use crudle\app\main\helpers\LayoutHelper as LH;
use yii\helpers\Inflector;

$controller = $this->context;
$layoutPath = '@appMain/layouts/';

$this->beginContent($layoutPath . 'base.php') ?>

<div class="main ui three column stackable grid pusher" style="<?= LH::sidebarMargin($controller) ?>">
    <div class="computer only large screen only one wide column" id="_sidebar_main" style="background: inherit">
        <?= $this->render('_main_sidebar') ?>
    </div>
    <!-- side view loads here -->
<?php
    if ($controller->id !== 'main' && $controller->showViewSidebar()) : ?>
    <div class="computer only large screen only <?= $controller->sidebarColWidth() ?> wide column">
    <?php
        if (file_exists($controller->viewPath . '/_sidebar.php')) :
            echo $this->renderFile($controller->viewPath . '/_sidebar.php', ['context' => $controller]);
        else:
            $viewDir = Inflector::underscore(Inflector::id2camel($this->context->module->defaultRoute));
            $viewFile = "@extModules/{$this->context->module->id}/views/{$viewDir}/_sidebar.php";
            if (file_exists($viewFile)) :
                echo $this->renderFile($viewFile);
            endif;
        endif ?>
    </div>
<?php
    endif ?><?php //= LH::colWidth($controller) ?>
    <div id="content" class="ten wide column" style="padding-top: 0.25rem;">
        <?= $this->render($layoutPath . '_flash_message', ['context' => $controller]) ?>
        <!-- main view loads here -->
        <?= $content ?>
    </div>
    <div class="two wide column computer only large screen only">
        <!-- form sidebar? -->
    </div>
</div>
<?php
    $this->registerCssFile("@web/css/main.css");
$this->endContent();
