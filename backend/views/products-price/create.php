<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsPrice */

$this->title = Yii::t('app', 'Добавить ценовую позицию товара');


echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Товар'), 'url' => ['products/view', 'id' => $item_id]],
    $this->title
]]);
?>
<div class="products-price-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formCreate', [
        'model' => $model,
        'item_id' => $item_id
    ]) ?>

</div>
