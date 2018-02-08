<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Messages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="messages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cabinet')->textInput() ?>

    <?= $form->field($model, 'page_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
