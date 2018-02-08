<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrdersItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'qty_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum_item')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
