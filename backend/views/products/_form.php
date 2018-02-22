<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use common\models\Products;
use mihaildev\ckeditor\CKEditor;
use common\models\Currency;


/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'category_id')->dropDownList(Category::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => '']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previewImg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->checkbox() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'hit')->checkbox() ?>

    <?php if (!$model->isNewRecord): ?>

    <?= $form->field($model, 'new')->checkbox() ?>

    <?= $form->field($model, 'sale')->checkbox() ?>

    <?php endif;?>

<!--    --><?//= $form->field($model, 'date')->textInput() ?>


    <h3><?= Yii::t('app', 'Редактирование переводов')?></h3>

    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Yii::t('app', 'Переводы') ?> <small><?= Yii::t('app', 'контента') ?></small></h2>
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

                                <?php
                                if(!$model->isNewRecord) $transcription = Products::getValue($model->id, $lang->id);
                                ?>

                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'title['.$lang->id.']['.$transcription->id .']')->label('Название товара')->textInput(['maxlength' => true, 'value' => $transcription['title']])?>
                                <?} else {?>
                                    <?= $form->field($model,'titleNew['.$lang->id.'][]')->label('Название товара')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>


                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'description['.$lang->id.']['.$transcription->id .']')->label('Краткое описание')->textInput(['maxlength' => true, 'value' => $transcription['description']])?>
                                <?} else {?>
                                    <?= $form->field($model,'descriptionNew['.$lang->id.'][]')->label('Краткое описание')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>



                                <?if(!empty($transcription)){?>
                                    <?= $form->field($model,'text['.$lang->id.']['.$transcription->id .']')->label('Текст')->textInput(['maxlength' => true, 'value' => $transcription['text']])?>
                                <?} else {?>
                                    <?= $form->field($model,'textNew['.$lang->id.'][]')->label('Текст')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3><?= Yii::t('app', 'Цена товара для разных стран')?></h3>

    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Yii::t('app', 'Стоимость') ?> <small><?= Yii::t('app', 'в зависимости от региона') ?></small></h2>
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
                                <a href="#<?= $lang->name?>1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">
                                    <?= Yii::t('app', 'Версия сайта на языке: ') ?>
                                    <?= $lang->name?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <?php foreach ($langs as $lang): ?>
                            <div role="tabpanel" class="tab-pane fade in" id="<?= $lang->name?>1" aria-labelledby="home-tab">

                                <?php
                                if(!$model->isNewRecord) $transcript = Products::getPrice($model->id, $lang->id);
                                ?>

                                <?if(!empty($transcript)){?>
                                    <?= $form->field($model,'price['.$lang->id.']['.$transcript->id .']')->label('Цена')->textInput(['maxlength' => true, 'value' => $transcript['price']])?>
                                <?} else {?>
                                    <?= $form->field($model,'priceNew['.$lang->id.'][]')->label('Цена')->textInput(['maxlength' => true, 'value' => ''])?>
                                <?}?>


                                <?if(!empty($transcript)){?>

                                    <?php $currency = Currency::find()->where(['id' => $transcript['currency_id']])->one(); ?>

                                    <?= $form->field($model,'currency['.$lang->id.']['.$transcript->id .']')->label('Валюта')
                                        ->textInput(['maxlength' => true, 'value' => $transcript['currency_id']])?>
                                <?} else {?>
                                    <?= $form->field($model,'currencyNew['.$lang->id.'][]')->label('Валюта')->dropDownList(Currency::find()->select(['name', 'id'])->indexBy('id')->column(), ['prompt' => ''])?>
                                <?}?>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
