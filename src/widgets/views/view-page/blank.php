<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/19/18
 * Time: 9:51 AM
 */
$widget = $this->context;
?>
<?php $this->beginContent('@entero/metronic/widgets/views/page/blank.php'); ?>

<?= $widget->renderContent('content') ?>

<?php $this->endContent() ?>
