<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PagesLang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lang', 'Pages Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-lang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lang', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lang', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('lang', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'item_id',
            'lang_id',
            'lang',
            'seo_title',
            'seo_keywords',
            'seo_description:ntext',
            'og_title',
            'og_keywords',
            'og_description:ntext',
            'title_1',
            'text_1:ntext',
            'title_2',
            'text_2:ntext',
            'title_3',
            'text_3:ntext',
            'title_4',
            'text_4:ntext',
            'title_5',
            'text_5:ntext',
        ],
    ]) ?>

</div>
