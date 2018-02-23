<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use common\models\Currency;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\ProductsPrice */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="products-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lang_id')->dropDownList($model->getArray($item_id))->label('Языковая версия сайта') ?>

    <?= $form->field($model, 'currency_id')->dropDownList(  ArrayHelper::map(Currency::find()->asArray()->all(),'id', 'name'),
        ['prompt' => 'Выберите валюту']) ?>

    <?= $form->field($model, 'price')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
