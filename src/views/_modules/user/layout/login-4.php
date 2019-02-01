<?php
/**
 * @var yii\web\View $this
 */
?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3"
     id="m_login" style="background-image: url(/media/metronic/img/bg/bg-2.jpg);">
    <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
        <div class="m-login__container">
            <div class="m-login__logo">
                <a href="#">
                    <img src="/media/metronic/img/logos/logo-1.png">
                </a>
            </div>
            <div class="m-login__signin">
                <div class="m-login__head">
                    <h3 class="m-login__title">Sign In To Admin</h3>
                </div>

                <?= $this->render('_form', $_params_) ?>

            </div>
            <div class="m-login__signup">
                <div class="m-login__head">
                    <h3 class="m-login__title">Sign Up</h3>
                    <div class="m-login__desc">Enter your details to create your account:</div>
                </div>
                <form class="m-login__form m-form" action="">
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="text" placeholder="Email" name="email"
                               autocomplete="off">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input m-login__form-input--last" type="password"
                               placeholder="Confirm Password" name="rpassword">
                    </div>
                    <div class="row form-group m-form__group m-login__form-sub">
                        <div class="col m--align-left">
                            <label class="m-checkbox m-checkbox--light">
                                <input type="checkbox" name="agree">I Agree the <a href="#"
                                                                                   class="m-link m-link--focus">terms
                                    and conditions</a>.
                                <span></span>
                            </label>
                            <span class="m-form__help"></span>
                        </div>
                    </div>
                    <div class="m-login__form-action">
                        <button id="m_login_signup_submit"
                                class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign
                            Up
                        </button>&nbsp;&nbsp;
                        <button id="m_login_signup_cancel"
                                class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel
                        </button>
                    </div>
                </form>
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
                                class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                            Request
                        </button>&nbsp;&nbsp;
                        <button id="m_login_forget_password_cancel"
                                class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel
                        </button>
                    </div>
                </form>
            </div>
            <div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
                <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign
                    Up</a>
            </div>
        </div>
    </div>
</div>

