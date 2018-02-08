<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('lang', 'Обновить категорию: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Категории'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->id]],
    Yii::t('lang', 'Обновить')
]]);
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'langs' => $langs
    ]) ?>

</div>
