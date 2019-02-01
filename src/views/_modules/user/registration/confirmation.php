<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 14/12/18
 * Time: 7:59 PM
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $_params_ array */

$this->title = Yii::t('entero', 'Registration Confirmation');
$this->params['body']['options']['class'] = 'm--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default';

$loginTemplate = app()->view->theme->loginTemplate;
$registerTemplate = str_replace('login', 'register', $loginTemplate);
?>

<div class="m-grid m-grid--hor m-grid--root m-page">

    <?= $this->render('../layout/' . $loginTemplate, [
        'content' => $this->render('_confirmation'),
    ]) ?>

</div>
