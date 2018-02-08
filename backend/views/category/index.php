<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('lang', 'Категории');
$this->params['breadcrumbs'][] = $this->title;

echo Breadcrumbs::widget(['links' => [
    $this->title
]]);
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('lang', 'Добавить категорию'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'parent_id',
                'filter' => Category::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => 'parent.name',
            ],
            'name',
//            'image_logo',
//            'image_small',
            //'image_large',
            'visible:boolean',
            'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
