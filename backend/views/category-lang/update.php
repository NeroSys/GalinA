<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryLang */

$this->title = Yii::t('lang', 'Обновление перевода: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Category Langs'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('lang', 'Update');

$item = Category::find()->where(['id' => $model->item_id])->one();

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Категории'), 'url' => ['category/index']],
    ['label' => $item->name, 'url' => ['category/view', 'id' =>$model->item_id]],
    $this->title
]]);
?>
<div class="category-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
