<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PagesLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages Langs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pages Lang', ['create'], ['class' => 'btn btn-success']) ?>
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
            'seo_title',
            //'seo_keywords',
            //'seo_description',
            //'og_title',
            //'og_description',
            //'title_1',
            //'text_1',
            //'title_2',
            //'text_2',
            //'title_3',
            //'text_3',
            //'title_4',
            //'text_4',
            //'title_5',
            //'text_5',
            //'title_6',
            //'text_6',
            //'title_7',
            //'text_7',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
