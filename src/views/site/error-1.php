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
    <div class="m-grid__item m-grid__item--fluid m-grid  m-error-1"
         style="background-image: url(/media/metronic/app/img/error/bg1.jpg);">
        <div class="m-error_container">
					<span class="m-error_number">
						<h1><?= $exception->statusCode ?></h1>
					</span>
            <p class="m-error_desc">
                <?= $message ?>
            </p>
        </div>
    </div>
</div>
<!-- end:: Page -->
