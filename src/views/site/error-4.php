<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/11/18
 * Time: 8:50 PM
 */

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
?>
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-error-4" style="background-image: url(/media/metronic/app/img//error/bg4.jpg);">
        <div class="m-error_container">
            <h1 class="m-error_number">
                <?= $exception->statusCode ?>
            </h1>
            <p class="m-error_title">
                ERROR
            </p>
            <p class="m-error_description">
                <?= $message ?>
            </p>
        </div>
    </div>
</div>
<!-- end:: Page -->
