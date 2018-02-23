<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\models\Lang;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsLang */

$lang = Lang::find()->where(['id' => $model->lang_id])->one();
$this->title = Yii::t('app', 'Обновление данных: ' . $model->title, [
    'nameAttribute' => '' . $model->title,
]);


echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Товары'), 'url' => ['products/view', 'id' => $model->item_id]],
    $this->title
]]);
?>
<div class="products-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3><?= Yii::t('admin', 'Версия языка сайта: ') ?><?= $lang->name ?></h3>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
