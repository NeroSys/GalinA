<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Товары');
$this->params['breadcrumbs'][] = $this->title;


echo Breadcrumbs::widget(['links' => [
    $this->title
]]);

?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Добавить товар'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            [
                'attribute' => 'category_id',
                'value' => function ($data){

                    return $data->category->name;

                }
            ],
            'name',
//            'previewImg',
//            'img',
            'visible:boolean',
            //'sort',
            'top:boolean',
            'hit:boolean',
            'new:boolean',
            'sale:boolean',
            'date:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
