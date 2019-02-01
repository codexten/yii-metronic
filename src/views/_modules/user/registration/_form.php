<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 14/12/18
 * Time: 8:48 PM
 */

?>

<form class="m-login__form m-form" action="">
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="text" placeholder="Fullname"
               name="fullname">
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="text" placeholder="Email" name="email"
               autocomplete="off">
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input" type="password" placeholder="Password"
               name="password">
    </div>
    <div class="form-group m-form__group">
        <input class="form-control m-input m-login__form-input--last" type="password"
               placeholder="Confirm Password" name="rpassword">
    </div>
    <div class="row form-group m-form__group m-login__form-sub">
        <div class="col m--align-left">
            <label class="m-checkbox m-checkbox--focus">
                <input type="checkbox" name="agree"> I Agree the <a href="#"
                                                                    class="m-link m-link--focus">terms
                    and conditions</a>.
                <span></span>
            </label>
            <span class="m-form__help"></span>
        </div>
    </div>
    <div class="m-login__form-action">
        <button id="m_login_signup_submit"
                class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign Up
        </button>
        <button id="m_login_signup_cancel"
                class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">Cancel
        </button>
    </div>
</form>
