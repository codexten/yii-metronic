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
    <div class="m-grid__item m-grid__item--fluid m-grid  m-error-6" style="background-image: url(/media/metronic/app/img//error/bg6.jpg);">
        <div class="m-error_container">
            <div class="m-error_subtitle m--font-light">
                <h1><?= $exception->statusCode ?></h1>
            </div>
            <p class="m-error_description m--font-light">

                <?= $message ?>
                
            </p>
        </div>
    </div>
</div>
<!-- end:: Page -->
