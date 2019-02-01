<?php
/**
 * @var yii\web\View $this
 */

/* @var $content string*/
use yii\helpers\Url;
?>

<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin"
     id="m_login">
    <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
        <div class="m-stack m-stack--hor m-stack--desktop">
            <div class="m-stack__item m-stack__item--fluid">
                <div class="m-login__wrapper">
                    <div class="m-login__logo">
                        <a href="#">
                            <img src="/media/metronic/img/logos/logo-2.png">
                        </a>
                    </div>
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Sign In To Admin</h3>
                        </div>

                        <?= $content ?>

                    </div>

                    <div class="m-login__forget-password">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Forgotten Password ?</h3>
                            <div class="m-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="m-login__form m-form" action="">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email" name="email"
                                       id="m_email" autocomplete="off">
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_forget_password_submit"
                                        class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request
                                </button>
                                <button id="m_login_forget_password_cancel"
                                        class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-stack__item m-stack__item--center">
                <div class="m-login__account">
								<span class="m-login__account-msg">
									Don't have an account yet ?
								</span>&nbsp;&nbsp;
                    <a href="<?=  Url::to(['@registration/register'])?>" id="m_login_signup" class="m-link m-link--focus m-login__account-link">Sign
                        Up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center"
         style="background-image: url(/media/metronic/img/bg/bg-4.jpg)">
        <div class="m-grid__item">
            <h3 class="m-login__welcome">Join Our Community</h3>
            <p class="m-login__msg">
                Lorem ipsum dolor sit amet, coectetuer adipiscing<br>elit sed diam nonummy et nibh euismod
            </p>
        </div>
    </div>
</div>
