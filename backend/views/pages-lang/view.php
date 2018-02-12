<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PagesLang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pages Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-lang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'seo_description',
            'og_title',
            'og_description',
            'title_1',
            'text_1',
            'title_2',
            'text_2',
            'title_3',
            'text_3',
            'title_4',
            'text_4',
            'title_5',
            'text_5',
            'title_6',
            'text_6',
            'title_7',
            'text_7',
        ],
    ]) ?>

</div>
