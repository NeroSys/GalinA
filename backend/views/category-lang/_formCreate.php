<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Lang;
use common\models\CatalogLang;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalog-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lang_id')->dropDownList($model->getArray($item_id)) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => [
            'row' => 2,
            'value' => ''],
    ])?>

    <?= $form->field($model, 'og_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_description')->widget(CKEditor::className(), [
        'options' => [
            'row' => 2,
            'value' => ''],
    ])?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
