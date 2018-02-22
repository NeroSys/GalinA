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

    <?= $form->field($model, 'lang_id')->dropDownList($model->getArray($item_id))->label('Языковая версия сайта') ?>

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
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
