<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

/* @var $this \yii\web\View */
/* @var $widget \entero\metronic\widgets\CreatePage */

$widget = $this->context;
?>
<?php $this->beginContent('@entero/metronic/widgets/views/page/blank.php'); ?>

<?= $widget->renderContent('form') ?>

<?php $this->endContent() ?>
