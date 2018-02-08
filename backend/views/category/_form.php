<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => [
        'enctype' => 'multipart/form-data'
    ],
        'id' => 'form-profile'
    ]); ?>

    <?= $form->field($model, 'parent_id')->dropDownList(Category::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => '']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'image_logo')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'image_small')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'image_large')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->checkbox() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'image_logo')->fileInput() ?>



    <h3><?= Yii::t('app', 'Редактирование переводов')?></h3>

    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Yii::t('app', 'Переводы') ?> <small><?= Yii::t('app', 'названия') ?></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <?php foreach ($langs as $lang): ?>

                            <li role="presentation" class="">
                                <a href="#<?= $lang->name?>" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><?= $lang->name?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <?php foreach ($langs as $lang): ?>
                            <div role="tabpanel" class="tab-pane fade in" id="<?= $lang->name?>" aria-labelledby="home-tab">
                                <p><?= $lang->name?></p>
                                <?php
                                if(!$model->isNewRecord) $transcription = Category::getValue($model->id, $lang->id);
                                ?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'nameL['.$lang->id.']['.$transcription->id .']')->label('')->textInput(['maxlength' => true, 'value' => $transcription['name']])?>
                                <?} else {?>
                                    <?= $form->field($model,'nameLNew['.$lang->id.'][]')->label('')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Yii::t('app', 'Переводы') ?> <small><?= Yii::t('app', 'SEO && OG') ?></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <?php foreach ($langs as $langS): ?>

                            <li role="presentation" class="">
                                <a href="#<?= $langS->name?>1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><?= $langS->name?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <?php foreach ($langs as $langS): ?>
                            <div role="tabpanel" class="tab-pane fade in" id="<?= $langS->name?>1" aria-labelledby="home-tab">
                                <p><?= $langS->name?></p>

                                <?php
                                if(!$model->isNewRecord) $transcription = Category::getValue($model->id, $langS->id);
                                ?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'title['.$langS->id.']['.$transcription->id .']')->textInput(['maxlength' => true, 'value' => $transcription['title']])?>
                                <?} else {?>
                                    <?= $form->field($model,'titleNew['.$langS->id.'][]')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'keywords['.$langS->id.']['.$transcription->id .']')->textInput(['maxlength' => true, 'value' => $transcription['keywords']])?>
                                <?} else {?>
                                    <?= $form->field($model,'keywordsNew['.$langS->id.'][]')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>
<!---->
                                <?if(!empty($transcription)){?>

                                    <?= $form->field($model, 'description['.$langS->id.']['.$transcription->id .']')->widget(CKEditor::className(), [
                                        'options' => [
                                            'row' => 2,
                                            'value' => $transcription['description']],
                                    ])?>
                                <?} else {?>

                                    <?= $form->field($model, 'descriptionNew['.$langS->id.'][]')->widget(CKEditor::className(), [
                                        'options' => [
                                            'row' => 2,
                                            'value' => ''],
                                    ])?>



                                <?}?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'og_title['.$langS->id.']['.$transcription->id .']')->textInput(['maxlength' => true, 'value' => $transcription['og_title']])?>
                                <?} else {?>
                                    <?= $form->field($model,'og_titleNew['.$langS->id.'][]')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'og_keywords['.$langS->id.']['.$transcription->id .']')->textInput(['maxlength' => true, 'value' => $transcription['og_keywords']])?>
                                <?} else {?>
                                    <?= $form->field($model,'og_keywordsNew['.$langS->id.'][]')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>
                                <!---->
                                <?if(!empty($transcription)){?>

                                    <?= $form->field($model, 'og_description['.$langS->id.']['.$transcription->id .']')->widget(CKEditor::className(), [
                                        'options' => [
                                            'row' => 2,
                                            'value' => $transcription['og_description']],
                                    ])?>
                                <?} else {?>

                                    <?= $form->field($model, 'og_descriptionNew['.$langS->id.'][]')->widget(CKEditor::className(), [
                                        'options' => [
                                            'row' => 2,
                                            'value' => ''],
                                    ])?>



                                <?}?>

                                
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('lang', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
