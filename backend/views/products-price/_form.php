<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Currency;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsPrice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'currency_id')->dropDownList(  ArrayHelper::map(Currency::find()->asArray()->all(),'id', 'name'),
        ['prompt' => 'Выберите валюту']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'oldPrice')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
