<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PagesLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'lang_id')->textInput() ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'og_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_5')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
