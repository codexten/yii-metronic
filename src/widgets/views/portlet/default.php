<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 7:36 PM
 */

use yii\bootstrap4\Html;

/* @var $widget \entero\metronic\widgets\Portlet */
$widget = $this->context;
?>

<?= Html::beginTag('div', $widget->options) ?>

<?= Html::beginTag('div', $widget->headOptions) ?>

<div class="m-portlet__head-caption">
    <div class="m-portlet__head-title">
        <h3 class="m-portlet__head-text">

            <?php if ($widget->icon): ?>

                <span class="m-portlet__head-icon">
                    <i class="<?= $widget->icon ?>"></i>
                </span>

            <?php endIf; ?>

            <?= $widget->title ?>

            <?php if ($widget->subTitle): ?>

                <small><?= $widget->subTitle ?></small>

            <?php endIf; ?>

        </h3>
    </div>
</div>
<div class="m-portlet__head-tools">

    <?= $widget->renderContent('actions') ?>

</div>

<?= Html::endTag('div') ?>

<?= Html::beginTag('div', $widget->bodyOptions) ?>

<?= $widget->renderContent('body') ?>

<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
