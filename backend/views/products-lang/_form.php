<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-lang-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Название товара') ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => [
            'row' => 4
        ],
    ])->label(Yii::t('app','Текст превью'))?>

    <?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => [
            'row' => 4
        ],
    ])->label(Yii::t('app','Основное описание'))?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
