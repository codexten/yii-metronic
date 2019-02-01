<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

use entero\metronic\widgets\Portlet;

$widget = $this->context;

/* @var $this \yii\web\View */
/* @var $widget \entero\metronic\widgets\Page */
/* @var $content string */
?>

<div class="m-content">

    <?php $portlet = Portlet::begin([
        'title' => $widget->title,
        'icon' => $widget->icon,
    ]) ?>

    <?php $portlet->beginContent('body') ?>

    <?php if(Yii::$app->session->getFlash('success')):?>

        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success')['message'] ?>
        </div>

    <?php endIf; ?>

    <?= $widget->renderContent('content') ?: $content ?>

    <?php $portlet->endContent() ?>

    <?php $portlet->beginContent('actions') ?>

    <?php if ($widget->actions): ?>

        <?= $portlet->actions($widget->actions) ?>

    <?php endIf; ?>

    <?= $widget->renderContent('actions') ?>
    <?php $portlet->endContent() ?>

    <?php $portlet->end() ?>

</div>