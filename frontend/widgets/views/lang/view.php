<?php
/**
 * Html код для вывода переключателя языков
 */

use yii\helpers\Html;
?>

<li class="language-icon">

       <? $class = ($current->local == Yii::$app->language ? "active" : '');?>
<!---->
        <li class="lang_ru <?=$class?>"> <?= $current->name?></li>

        <?php foreach ($langs as $lang):?>
            <?$class = ($lang->local == Yii::$app->language ? "active" : '' )?>

        <li class="lang_ru <?=$class?>"> <?= Html::a(Html::img("@web/images/{$lang->img}"), '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?></li>

        <?php endforeach;?>

</li>