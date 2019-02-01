<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/19/18
 * Time: 9:52 AM
 */

/* @var $this \yii\web\View */
/* @var $widget \entero\metronic\widgets\Page */
?>

<?php if ($widget->title): ?>

    <?= $this->render('_subheader', ['widget' => $widget]) ?>

<?php endIf; ?>

<div class="m-content">

    <?= $widget ? $widget->renderContent('content') : $content ?>

</div>

