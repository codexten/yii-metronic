<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/19/18
 * Time: 12:08 PM
 */

use yii\helpers\Html;

/* @var $widget \entero\vue\widgets\Form */
/* @var $content string */

$widget = $this->context;
?>
<?php $this->beginContent('@entero/web/widgets/views/form/_clear.php'); ?>

<?= $widget->renderContent('body') ?>

<?php $this->endContent() ?>
