<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductsPriceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-price-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'currency_id') ?>

    <?= $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('lang', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
