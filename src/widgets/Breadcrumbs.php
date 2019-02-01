<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 10:06 AM
 */

namespace entero\metronic\widgets;


class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
    public $options = ['class' => 'm-subheader__breadcrumbs m-nav m-nav--inline'];
    public $itemTemplate = "<li class='m-nav__item'>{link}</li>\n<li class='m-nav__separator'>-</li>\n";
    public $activeItemTemplate = "<li class='m-nav__item'>{link}</li>\n";
}