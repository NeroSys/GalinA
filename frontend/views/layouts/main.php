<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <!-- Basic Page Needs
      ================================================== -->

    <title>Galin-A</title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="<?= Yii::$app->language ?>">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
      ================================================== -->

    <link rel="shortcut icon" href="/frontend/web/images/min.png">
    <link rel="apple-touch-icon" href="/frontend/web/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/frontend/web/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/frontend/web/images/apple-touch-icon-114x114.png">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="homepage">
<?php $this->beginBody() ?>

<div class="main">

    <?= $this->render('/layouts/header') ?>

    <?= $content; ?>

    <?= $this->render('/layouts/footer') ?>

    <?php
    Modal::begin([
        'header' => '<h2 class="cart-sub-totle">Ваш кошик</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '<div class="mt-20">
<button type="button" class="btn-color btn" data-dismiss="modal">Назад до шопінгу</button>
<a href="'. Url::to(['cart/view']) .'" class="btn-color btn right-side">Оформити замовлення</a>
<button type="button" class="owl-buttons clear_cart_btn">Очистити кошика</button>
</div>',
    ]);

    Modal::end();
    ?>




</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
