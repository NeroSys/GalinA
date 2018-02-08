<?php
/**
 * Html код для вывода переключателя языков
 */

use yii\helpers\Html;
?>


<div class="lang">
    <ul class="language">

<!--       --><?// $class = ($current->local == Yii::$app->language ? "active" : '');?>
<!---->
<!--        <li class="lang_ru --><?//=$class?><!--"> --><?//= $current->name?><!--</li>-->

        <?php foreach ($langs as $lang):?>
            <?$class = ($lang->local == Yii::$app->language ? "active" : '' )?>

        <li class="lang_ru <?=$class?>"> <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?></li>
        <?php endforeach;?>
    </ul>
</div>
