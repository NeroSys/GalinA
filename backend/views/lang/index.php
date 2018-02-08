<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('lang', 'Языки сайта');
//$this->params['breadcrumbs'][] = $this->title;

echo Breadcrumbs::widget(['links' => [
    $this->title
]]);

?>
<div class="lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('lang', 'Добавить язык сайта'), ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'url:url',
//            'local',
            'name',
            'default:boolean',
            'date_update:date',
            'date_create:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
