<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\models\Lang;
use common\models\Products;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsPrice */


$lang = Lang::find()->where(['id' => $model->lang_id])->one();
$product = Products::find()->where(['id' => $model->item_id])->one();

$this->title = Yii::t('app', 'Обновление ценовой позиции: ' . $product->name, [
    'nameAttribute' => '' . $model->id,
]);


echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Товары'), 'url' => ['products/view', 'id' => $model->item_id]],
    $this->title
]]);
?>
<div class="products-price-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3><?= Yii::t('admin', 'Версия языка сайта: ') ?><?= $lang->name ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
