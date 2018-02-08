<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\models\Category;


/* @var $this yii\web\View */
/* @var $model common\models\CategoryLang */

$this->title = Yii::t('lang', 'Добавить перевод');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Category Langs'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;

$item = Category::find()->where(['id' =>$item_id])->one();

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Категории'), 'url' => ['category/index']],
    ['label' => $item->name, 'url' => ['category/view', 'id' =>$item_id]],
    $this->title
]]);
?>
<div class="category-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formCreate', [
        'model' => $model, 'item_id' => $item_id
    ]) ?>

</div>
