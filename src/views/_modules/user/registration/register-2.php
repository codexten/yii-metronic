<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 14/12/18
 * Time: 8:43 PM
 */

/* @var $this \yii\web\View */
?>

<div class="m-login__signup" style="display: block">
    <div class="m-login__head">
        <h3 class="m-login__title">Sign Up</h3>
        <div class="m-login__desc">Enter your details to create your account:</div>
    </div>

    <?= $this->render('@entero/module/user/views/registration/_form', $_params_) ?>

</div>
