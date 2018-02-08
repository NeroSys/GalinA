<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PagesLang */

$this->title = Yii::t('lang', 'Create Pages Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Pages Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
