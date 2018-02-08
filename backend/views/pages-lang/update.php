<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PagesLang */

$this->title = Yii::t('lang', 'Update Pages Lang: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Pages Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('lang', 'Update');
?>
<div class="pages-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
