<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MessagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'message') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'cabinet') ?>

    <?php // echo $form->field($model, 'page_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('lang', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
