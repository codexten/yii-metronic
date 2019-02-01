<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/16/18
 * Time: 12:20 PM
 */

namespace entero\metronic;

use entero\vue\VueBaseAsset;
use entero\vue\VueWidgetAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@npm/select2/dist';
    public $css = [
        'css/select2.min.css',
    ];
    public $js = [
        'js/select2.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}