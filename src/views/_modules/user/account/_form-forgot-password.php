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
 * @var \entero\module\user\models\ForgotPasswordForm $model
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

    <?= $form->field($model, 'username')
        ->textInput([
            'class' => 'form-control m-input',
            'placeholder' => $model->getAttributeLabel('login'),
            'autocomplete' => 'off',
        ])
    //        ->hint("Please enter username")
    //        ->label(false);
    ?>

</div>


<div class="m-login__form-action">

    <?= Html::submitButton(
        Yii::t('entero:metronic', 'Submit'),
        ['class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air', 'id' => 'm_login_signin_submit']
    ) ?>

</div>

<?php ActiveForm::end(); ?>

