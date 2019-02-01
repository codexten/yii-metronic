<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/19/18
 * Time: 11:32 AM
 */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $fields array */
/* @var $cols integer */
/* @var $widget \entero\vue\widgets\Form */

$widget = $this->context;
?>
<?php if ($cols > 1): ?>

    <?= Html::beginTag('div', ['class' => 'row']) ?>

<?php endIf; ?>

<?php foreach ($fields as $field):
    $col = ArrayHelper::getValue($field, 'col', (12 / $cols))

    ?>

    <?php if (ArrayHelper::getValue($field, 'row')): ?>

    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'row']) ?>

<?php endIf; ?>


    <?php if ($cols > 1): ?>

    <?= Html::beginTag('div', ['class' => 'col-md-' . $col]) ?>

<?php endIf; ?>

    <?= $widget->field($field) ?>

    <?php if ($cols > 1): ?>

    <?= Html::endTag('div') ?>

<?php endIf; ?>

<?php endForeach; ?>

<?php if ($cols > 1): ?>

    <?= Html::endTag('div') ?>

<?php endIf; ?>

