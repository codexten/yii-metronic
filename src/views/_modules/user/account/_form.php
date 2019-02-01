<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 4/11/18
 * Time: 4:46 PM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var entero\module\user\models\LoginForm $model
 * @var entero\module\user\Module $module
 */
?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
//    'enableAjaxValidation' => true,
//    'enableClientValidation' => false,
    'validateOnBlur' => false,
    'validateOnType' => false,
    'validateOnChange' => false,
//    'options' => ['class' => 'm-login__form m-form'],
]) ?>

<div class="form-group m-form__group">

    <?= $form->field($model, 'login')
        ->textInput([
            'class' => 'form-control m-input',
            'placeholder' => $model->getAttributeLabel('login'),
            'autocomplete' => 'off',
        ])
    //        ->label(false);
    ?>

</div>
<div class="form-group m-form__group">

    <?= $form->field($model, 'password')
        ->passwordInput([
            'class' => 'form-control m-input',
            'placeholder' => $model->getAttributeLabel('password'),
            'autocomplete' => 'off',
        ])
    //        ->label(false);
    ?>

</div>


<div class="row m-login__form-sub">

    <?php if (false): ?>

        <div class="col m--align-left">
            <label class="m-checkbox m-checkbox--focus">
                <input type="checkbox"
                       name="<?= $model->formName() ?>[rememberMe]"> <?= $model->getAttributeLabel('rememberMe') ?>
                <span></span>
            </label>
        </div>

    <?php endIf; ?>

    <div class="col m--align-right">
        <a href="<?= Url::to('@account/forgot-password') ?>" id="m_login_forget_password" class="m-link">Forget
            Password ?</a>
    </div>
</div>


<div class="m-login__form-action">

    <?= Html::submitButton(
        Yii::t('entero:metronic', 'Sign in'),
        ['class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air', 'id' => 'm_login_signin_submit']
    ) ?>

</div>

<?php ActiveForm::end(); ?>

