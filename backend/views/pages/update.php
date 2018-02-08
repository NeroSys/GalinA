<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = Yii::t('lang', 'Update Pages: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('lang', 'Update');
?>
<div class="pages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
