<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/17/18
 * Time: 10:27 PM
 */

namespace entero\metronic\widgets;


class Nav extends \yii\bootstrap4\Nav
{
    public $options = [
        'class' => 'm-nav',
    ];

    /**
     * @inheritdoc
     */
    public function renderItem($item)
    {
        $item['options']['class'] = ['m-nav__item'];
        $item['linkOptions']['class'] = ['m-nav__link'];

        return parent::renderItem($item);
    }

}