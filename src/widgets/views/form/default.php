<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 3:33 PM
 */

use entero\metronic\widgets\Portlet;

/* @var $widget \entero\vue\widgets\Form */

$widget = $this->context;
?>
<?php $this->beginContent('@entero/web/widgets/views/form/_clear.php'); ?>

<?php $portlet = Portlet::begin([
    'title' => $this->title,
]) ?>

<?php $portlet->beginContent('body') ?>

<?= $widget->renderContent('body') ?>

<?php $portlet->endContent() ?>

<?php $portlet->beginContent('actions') ?>

<?= $widget->actions() ?>

<?php $portlet->endContent() ?>

<?php $portlet->end() ?>

<?php $this->endContent() ?>
