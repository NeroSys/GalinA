<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Lang */

$this->title = $model->name;

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Языки сайта'), 'url' => ['index']],
    $this->title
]]);
?>
<div class="lang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lang', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lang', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-warning',
            'data' => [
                'confirm' => Yii::t('lang', 'Удалить?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:url',
            'local',
            'name',
            'default:boolean',
            'date_update:date',
            'date_create:date',
        ],
    ]) ?>

</div>
