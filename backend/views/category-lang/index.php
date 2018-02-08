<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoryLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('lang', 'Category Langs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('lang', 'Create Category Lang'), ['create'], ['class' => 'btn btn-success']) ?>
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
            'name',
            //'title',
            //'keywords',
            //'description',
            //'og_title',
            //'og_keywords',
            //'og_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
