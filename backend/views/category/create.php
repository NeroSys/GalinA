<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('lang', 'Добавить категорию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Категории'), 'url' => ['index']],
    $this->title
]]);
?>
<div class="category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'langs' => $langs
    ]) ?>

</div>
