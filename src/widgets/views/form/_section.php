<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 9:21 PM
 */

/* @var $title string */
/* @var $fields array */
/* @var $cols integer */
/* @var $widget \entero\vue\widgets\Form */

$widget = $this->context;
$fieldOptions = [
    'fields' => $fields,
    'cols' => $cols,
];
?>

<div class="m-form__section m-form__section--first">
    <div class="m-form__heading">
        <h3 class="m-form__heading-title"><?= $title ?></h3>
    </div>

    <?= $widget->fields($fieldOptions) ?>

</div>
