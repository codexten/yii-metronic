<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

use entero\vue\widgets\Grid;

/* @var $this \yii\web\View */
/* @var $widget \entero\metronic\widgets\IndexPage */

$widget = $this->context;
?>

<?php $this->beginContent('@entero/web/widgets/views/page/default.php'); ?>

<?= $widget->renderContent('search') ?>

<?php //$grid = Grid::begin($widget->gridConfig) ?>
<!---->
<?php //echo $widget->renderContent('grid.*', $grid) ?>
<!---->
<?php //$grid->end() ?>

<?= $widget->renderContent('grid') ?>

<?php $this->endContent() ?>
