<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/19/18
 * Time: 9:51 AM
 */

/* @var $this \yii\web\View */
/* @var $widget \entero\web\widgets\UpdatePage */
$widget = $this->context;
?>
<?php $this->beginContent('@entero/metronic/widgets/views/page/blank.php'); ?>

<?= $widget->renderContent('form') ?>

<?php $this->endContent() ?>
