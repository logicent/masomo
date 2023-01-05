<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use icms\FomanticUI\Elements;

$menuGroups = ArrayHelper::map($menuList, 'label', 'label', 'group');
$menuGroupClass = $this->params['menuGroupClass'];
$currentUrl = explode('/', Url::current());
$lastElement = $currentUrl[array_key_last($currentUrl)];
?>

<div class="in-page-sidebar">
<?php
    foreach ($menuGroups as $groupName => $groupItems) :
        echo Html::tag('div',
                $menuGroupClass::enums()[$groupName], [
                'class' => 'ui small header',
                'style' => 'font-family: inherit; margin-bottom: 1em; color: #36414c; font-weight: normal;'
            ]);
        foreach ( $menuList as $menu ) :
            if ( (empty($menu['group']) || $menu['group'] == $groupName)
                && $menu['visible'] === true) :
                $currentMenu = explode('/', $menu['route']);
                $label = Yii::t('app', '{menuLabel}', ['menuLabel' => $menu['label']]);
                echo Html::tag('div',
                    Html::a(
                        isset($menu['icon']) ? Elements::icon($menu['icon'], ['class' => 'grey']) .'&emsp;'. $label : $label,
                        Url::to([$menu['route']]), [
                            'class' => $lastElement == $currentMenu[array_key_last($currentMenu)-1] ? 'item active' : 'item',
                            // 'data' => [
                            //     'hx-get' => Url::to([$menu['route']]),
                            //     'hx-target' => '#content',
                            //     'hx-swap' => 'innerHtml',
                            //     'hx-push-url' => 'true',
                            // ],
                            'style' => 'color: #6c7680;'
                        ]
                    ),
                    ['class' => 'ui link selection list']
                );
            endif;
        endforeach;
    endforeach; ?>
</div>