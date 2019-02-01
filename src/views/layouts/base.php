<?php
/* @var  $this \yii\web\View */
/* @var  $content string */

$this->params['app']['options']['style'] = [
    'height' => '100%',
    'display' => 'flex',
];
?>

<?php $this->beginContent('@entero/web/views/layouts/base.php'); ?>

<?= $content ?>

<?php $this->endContent(); ?>