<?php
/**
 * @link https://entero.co.in/
 * @copyright Copyright (c) 2012 Entero Software Solutions Pvt.Ltd
 * @license https://entero.co.in/license/
 * @author Ashlin A <ashlin@entero.in>
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $_params_ array */

$this->title = Yii::t('entero', 'Forgot Password');
$this->params['body']['options']['class'] = 'm--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default';

$loginTemplate = app()->view->theme->loginTemplate;
$registerTemplate = str_replace('login', 'forgot-password', $loginTemplate);
?>

<div class="m-grid m-grid--hor m-grid--root m-page">

    <?= $this->render('@entero/module/user/views/layout/' . $loginTemplate, [
        'content' => $this->render($registerTemplate, $_params_),
    ]) ?>

</div>

