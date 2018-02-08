<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProductsPrice */

$this->title = Yii::t('lang', 'Create Products Price');
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Products Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-price-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
