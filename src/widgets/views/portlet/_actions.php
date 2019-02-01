<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 26/10/18
 * Time: 2:23 PM
 */

use yii\helpers\Html;

/* @var $items array */
?>
<ul class="m-portlet__nav">

    <?php foreach ($items as $item): ?>

        <li class="m-portlet__nav-item">

            <?= Html::a($item['label'],$item['url'],$item['options']) ?>
<!--            <a href="#"-->
<!--               class="m-portlet__nav-link btn btn-secondary m-btn m-btn--air m-btn--icon m-btn--icon-only m-btn--pill">-->
<!--                --><?//= $item['label'] ?>
<!--            </a>-->
        </li>

    <?php endForeach; ?>

</ul>