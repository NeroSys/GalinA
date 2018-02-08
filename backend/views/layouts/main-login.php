<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;

    LoginAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body style="background:#F7F7F7;">
<?php $this->beginBody() ?>

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
