<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/16/18
 * Time: 6:28 PM
 */

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'codexten:metronic' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@codexten/metronic/messages',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'class' => \codexten\yii\metronic\Theme::class,
                'pathMap' => [
                    '@app/views' => [
                        '@codexten/metronic/views',
                    ],
                    '@app/views/layouts' => [
                        '@codexten/metronic/views/layouts',
                    ],
                    '@codexten/module/user/views' => [
                        '@codexten/metronic/views/_modules/user',
                        //To fix layout issue of user module, while accessing `/account/login`
                        '@codexten/metronic/views',
                    ],
                    '@codexten/web/widgets/views' => [
                        '@codexten/metronic/widgets/views',
                    ],
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            //actions
            \yii\web\ErrorAction::class => [
                'layout' => 'base',
            ],
            // widgets
            \codexten\web\widgets\Page::class => [
                'class' => \codexten\yii\metronic\widgets\Page::class,
            ],
            codexten\web\widgets\IndexPage::class => [
                'class' => codexten\yii\metronic\widgets\IndexPage::class,
            ],
//            \codexten\web\widgets\CreatePage::class => [
//                'class' => \codexten\yii\metronic\widgets\CreatePage::class,
//            ],
            \yii\widgets\Breadcrumbs::class => [
                'class' => \codexten\yii\metronic\widgets\Breadcrumbs::class,
            ],
            \kartik\form\ActiveForm::class => [
                'class' => \kartik\form\ActiveForm::class,
                'options' => [
                    'class' => 'm-form m-form--fit m-form--label-align-right',
                ],
                'fieldConfig' => [
                    'options' => [
                        'class' => 'form-group m-form__group',
                    ],
                    'addClass' => 'form-control m-input',
                ],
            ],

            //vue Widgets
            \codexten\vue\widgets\Form::class => [
                'class' => \codexten\yii\metronic\widgets\Form::class,
            ],

            // menus
            \codexten\yii\metronic\widgets\MainMenu::class => [
                'menu' => [
                    'class' => \codexten\web\menus\PrimaryMenu::class,
                ],
            ],
        ],
    ],
    'params' => [
        'logo' => '/media/metronic/demo/img/logo/logo_default_dark.png',
    ],
];