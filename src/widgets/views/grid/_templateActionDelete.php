<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 5/11/18
 * Time: 4:01 PM
 */

use yii\helpers\Html;

?>
<template slot="action-delete" slot-scope="{model}">

    <?= Html::beginTag('a', [
        ':href' => 'model._meta.deleteUrl',
        'v-if' => 'model._meta.canDelete',
        'title' => 'delete',
        'class' => 'm-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill',
        'data-confirm' => Yii::t('entero:metronic', 'Are you sure you want to delete?'),
//        'data-method' => 'post',
    ]) ?>

    <i class="la la-trash"></i>

    <?= Html::endTag('a') ?>

</template>