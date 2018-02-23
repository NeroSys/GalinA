<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model common\models\ProductsLang */

$this->title = Yii::t('app', 'Добавить перевод контента');

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Товар'), 'url' => ['products/view', 'id' => $item_id]],
    $this->title
]]);
?>
<div class="products-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formCreate', [
        'model' => $model,
        'item_id' => $item_id
    ]) ?>

</div>
