<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Messages */

$this->title = Yii::t('lang', 'Update Messages: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('lang', 'Update');
?>
<div class="messages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
