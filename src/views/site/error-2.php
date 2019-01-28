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
    <div class="m-grid__item m-grid__item--fluid m-grid  m-error-2" style="background-image: url(/media/metronic/app/img//error/bg2.jpg);">
        <div class="m-error_container">
					<span class="m-error_title2 m--font-light">
						<h1>OOPS!</h1>
					</span>
            <span class="m-error_desc m--font-light">
						<?= $message ?>
					</span>
        </div>
    </div>
</div>
<!-- end:: Page -->