<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OrdersItems */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Orders Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-items-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lang', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lang', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('lang', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'order_id',
            'product_id',
            'name',
            'price',
            'qty_item',
            'sum_item',
        ],
    ]) ?>

</div>
