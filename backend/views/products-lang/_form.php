<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'lang_id')->textInput() ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
