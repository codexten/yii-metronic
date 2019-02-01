<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/11/18
 * Time: 12:50 PM
 */

return [
    'controllerMap' => [
        'metronic' => \entero\metronic\hidev\console\MetronicController::class,
    ],
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        'metronicDir' => [
            'class' => \hidev\components\Directory::class,
        ],
        'vcsignore' => [
            'runtime/common/*' => 'metronic Directories',
        ],
    ],
];