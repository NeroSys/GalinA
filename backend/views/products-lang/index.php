<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('lang', 'Products Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('lang', 'Create Products Lang'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'item_id',
            'lang_id',
            'lang',
            'title',
            //'keywords',
            //'description',
            //'og_title',
            //'og_keywords',
            //'og_description',
            //'name',
            //'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
