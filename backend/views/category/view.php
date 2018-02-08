<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = $model->name;
echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Категории'), 'url' => ['index']],
    $this->title
]]);
?>
<div class="category-view">

    <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?= Yii::t('lang', 'Основная') ?> <small><?= Yii::t('lang', 'информация') ?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                        <li>
                            <?= Html::a(Yii::t('lang', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        </li>
                        <li>
                            <?= Html::a(Yii::t('lang', 'Удалить'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('lang', 'Удалить значение?'),
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </li>
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [

                            [
                                'attribute' => 'image_logo',
                                'format'=> 'html',
                                'label' => 'Логотип категории',
                                'value' => function($data){

                                    return Html::img($data->getImageLogo(), ['width' => 180]);

                                }
                            ],

                            'name',
                            'id',
                            [
                                'attribute' => 'parent_id',
                                'value' => ArrayHelper::getValue($model, 'parent.name'),
                            ],

//            'image_logo',
//            'image_small',
//            'image_large',
                            [
                                'attribute'=> 'visible',
                                'value' => function($model){
                                    return !$model->visible ? '<span class="text-danger">Выключено</span>' : '<span class="text-success">Отображение включено</span>';
                                },
                                'format' => 'html',
                                
                            ],
                            'sort',
                        ],
                    ]) ?>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?= Yii::t('lang', 'Переводы значений') ?> <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">


                        <?php $newLang = $model->getArray($model->id) ?>
                        <?php if (!empty($newLang)): ?>
                        <li>
                            <?= Html::a(Yii::t('app', 'Добавить перевод'), ['/category-lang/create', 'item_id' => $model->id], ['class' => 'btn btn-primary'])?>
                        </li>
                        <?php endif;?>

                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <?= GridView::widget([
                        'dataProvider' => new ActiveDataProvider(['query' => $model->getCategoryLangs()]),
                        'layout' => "{items}\n{pager}",
                        'columns' => [

                            'lang',
                            'name:ntext',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{view} {update} {delete} {link}',
                                'buttons' => [
                                    'delete' => function ($url,$model,$key) {
                                        return Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                            ['category-lang/delete', 'id' => $model->id, 'item_id' => $model->item_id],
                                            ['data-method' => 'post']
                                        );
                                    },
                                ],
                                'controller' => 'category-lang',

                            ],
                        ],
                    ]); ?>

                </div>
            </div>

            <div class="x_panel">
                <div class="x_title">
                    <h2><?= Yii::t('app', 'SEO && OG')?> <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <?php if (!empty($newLang)): ?>
                            <li>
                                <?= Html::a(Yii::t('app', 'Добавить перевод'), ['/category-lang/create', 'item_id' => $model->id], ['class' => 'btn btn-primary'])?>
                            </li>
                        <?php endif;?>

                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">


                    <?= GridView::widget([
                        'dataProvider' => new ActiveDataProvider(['query' => $model->getCategoryLangs()]),
                        'layout' => "{items}\n{pager}",
                        'columns' => [

                            'lang',
                            'title:ntext',
                            'keywords:ntext',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'template' => '{view} {update}{link}',
                                'buttons' => [
                                    'delete' => function ($url,$model,$key) {
                                        return Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                            ['category-lang/delete', 'id' => $model->id, 'item_id' => $model->item_id],
                                            ['data-method' => 'post']
                                        );
                                    },
                                ],
                                'controller' => 'category-lang',

                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>

    </div>

</div>
