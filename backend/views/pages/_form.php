<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_locale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_siteName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
