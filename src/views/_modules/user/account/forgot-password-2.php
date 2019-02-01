<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 30/12/18
 * Time: 2:12 PM
 */

use yii\helpers\Html;

?>

<div class="m-login__signin">


    <?php if ($_params_['message']): ?>

        <div class="text-center">

            <?= $_params_['message'] ?>

        </div>
        <br>

        back to <?= Html::a('login', Yii::$app->user->loginUrl) ?> page.


    <?php else: ?>

        <div class="m-login__head">
            <h3 class="m-login__title">Forgot Password</h3>
        </div>

        <?= $this->render('_form-forgot-password', $_params_) ?>

    <?php endIf; ?>

</div>

