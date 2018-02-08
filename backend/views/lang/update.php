<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Lang */

$this->title = Yii::t('lang', 'Обновление позиции: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Языки сайта'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->id]],
    Yii::t('lang', 'Обновить')
]]);
?>
<div class="lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
