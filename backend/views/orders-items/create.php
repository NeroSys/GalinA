<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrdersItems */

$this->title = Yii::t('lang', 'Create Orders Items');
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Orders Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-items-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
