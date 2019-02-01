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
                'entero:metronic' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@entero/metronic/messages',
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'class' => \entero\metronic\Theme::class,
                'pathMap' => [
                    '@app/views' => [
                        '@entero/metronic/views',
                    ],
                    '@app/views/layouts' => [
                        '@entero/metronic/views/layouts',
                    ],
                    '@entero/module/user/views' => [
                        '@entero/metronic/views/_modules/user',
                        //To fix layout issue of user module, while accessing `/account/login`
                        '@entero/metronic/views',
                    ],
                    '@entero/web/widgets/views' => [
                        '@entero/metronic/widgets/views',
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
            \entero\web\widgets\Page::class => [
                'class' => \entero\metronic\widgets\Page::class,
            ],
            entero\web\widgets\IndexPage::class => [
                'class' => entero\metronic\widgets\IndexPage::class,
            ],
//            \entero\web\widgets\CreatePage::class => [
//                'class' => \entero\metronic\widgets\CreatePage::class,
//            ],
            \yii\widgets\Breadcrumbs::class => [
                'class' => \entero\metronic\widgets\Breadcrumbs::class,
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
            \entero\vue\widgets\Form::class => [
                'class' => \entero\metronic\widgets\Form::class,
            ],

            // menus
            \entero\metronic\widgets\MainMenu::class => [
                'menu' => [
                    'class' => \entero\web\menus\PrimaryMenu::class,
                ],
            ],
        ],
    ],
    'params' => [
        'logo' => '/media/metronic/demo/img/logo/logo_default_dark.png',
    ],
];