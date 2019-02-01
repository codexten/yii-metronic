<?php
/**
 * @var yii\web\View $this
 */

use yii\helpers\Url;

$enableRegistration = false;
$logo='/img/logo-bg.png'
?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"
     id="m_login" style="background-image: url(/media/metronic/img/bg/bg-1.jpg);">
    <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
        <div class="m-login__container">
            <div class="m-login__logo">
                <a href="#">
                    <img src="<?= $logo ?>">
                </a>
            </div>

            <?= $content ?>

            <?php if ($enableRegistration): ?>

                <div class="m-login__account">
                    <span class="m-login__account-msg">Don't have an account yet ?</span>&nbsp;&nbsp
                    <a href="<?= Url::to(['@registration/register']) ?>" id="m_login_signup"
                       class="m-link m-link--light m-login__account-link">
                        SignUp
                    </a>
                </div>

            <?php endIf; ?>

        </div>
    </div>
</div>
