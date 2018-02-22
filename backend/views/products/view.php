<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">




            <div class="x_panel">
                <div class="x_title">
                    <h2><?= Html::encode($this->title) ?> <small>
                        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Информация о товаре</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Цены</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Переводы контента</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                <?= DetailView::widget([
                                    'model' => $model,
                                    'attributes' => [
                                        'id',
                                        'category_id',
                                        'name',
                                        'visible',
                                        'url:url',
                                        'sort',
                                        'hit',
                                        'new',
                                        'sale',
                                        'date',
                                    ],
                                ]) ?>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                <?= GridView::widget([
                                    'dataProvider' => new ActiveDataProvider(['query' => $model->getProductsPrices()]),
                                    'layout' => "{items}\n{pager}",
                                    'columns' => [

                                        [
                                            'attribute' => 'currency_id',
                                            'value' => function ($data){

                                                return $data->currency->name;

                                            }
                                        ],
                                        'price',
                                        'oldPrice',


                                        [
                                            'class' => 'yii\grid\ActionColumn',
                                            'template' => '{update} {delete} {link}',
                                            'buttons' => [
                                                'delete' => function ($url,$model,$key) {
                                                    return Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                                        ['products-price/delete', 'id' => $model->id, 'item_id' => $model->item_id],
                                                        ['data-method' => 'post']
                                                    );
                                                },
                                            ],
                                            'controller' => 'products-price',

                                        ],
                                    ],
                                ]); ?>
                                            <p>
                                                <?= Html::a(Yii::t('app', 'Добавить цену'), ['/products-price/create', 'item_id' => $model->id],
                                                    ['class' => 'btn btn-lg btn-primary btn-block'])?>
                                            </p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                <?= GridView::widget([
                                    'dataProvider' => new ActiveDataProvider(['query' => $model->getProductsLangs()]),
                                    'layout' => "{items}\n{pager}",
                                    'columns' => [
                                        [
                                            'attribute' => 'lang',
                                            'label' => 'Язык'
                                        ],
                                        [
                                                'attribute' => 'title',
                                            'label' => 'Название товара'
                                        ],
                                        [
                                            'class' => 'yii\grid\ActionColumn',
                                            'template' => '{update} {delete} {link}',
                                            'buttons' => [
                                                'delete' => function ($url,$model,$key) {
                                                    return Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                                        ['products-lang/delete', 'id' => $model->id, 'item_id' => $model->item_id],
                                                        ['data-method' => 'post']
                                                    );
                                                },
                                            ],
                                            'controller' => 'products-lang',

                                        ],
                                    ],
                                ]); ?>

                                    <p>
                                        <?= Html::a(Yii::t('app', 'Добавить перевод'), ['/products-price/create', 'item_id' => $model->id],
                                            ['class' => 'btn btn-lg btn-primary btn-block'])?>
                                    </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Изображение <small>на карточке товара</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <img src="/frontend/web/images/large.jpg">

                </div>

                <div class="x_title">
                    <h2>Галлерея <small>на карточке товара</small></h2>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>

</div>
