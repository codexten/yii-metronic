<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 9:21 PM
 */

use entero\metronic\widgets\Portlet;

/* @var $title string */
/* @var $fields array */
/* @var $widget \entero\vue\widgets\Form */

$widget = $this->context;
$fieldOptions = [
    'fields' => $fields,
    'cols' => $cols,
];
?>

<?php $portlet = Portlet::begin([
    'title' => $title,
]) ?>

<?php $portlet->beginContent('body') ?>

<?= $widget->fields($fields) ?>

<?php $portlet->endContent() ?>

<?php $portlet->end() ?>
