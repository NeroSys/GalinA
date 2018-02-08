<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Lang */

$this->title = Yii::t('lang', 'Добавить язык сайта');

echo Breadcrumbs::widget(['links' => [
    ['label' => Yii::t('lang', 'Языки сайта'), 'url' => ['index']],
    $this->title
]]);
?>
<div class="lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
