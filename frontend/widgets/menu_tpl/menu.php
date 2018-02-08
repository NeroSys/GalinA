<?php
use yii\helpers\Url;

?>


    <li><a href="<?= Url::to(['category/view', 'id' => $category['id']]) ?>">
            <?= $category['name'] ?>

<!--            --><?php //if ( isset($category['childs'])):?>
<!--                <span>(21)</span>-->
<!--            --><?php //endif;?>

        </a>
        <?php if ( isset($category['childs'])):?>
            <ul>
                <?= $this->getMenuHtml($category['childs']); ?>
            </ul>
        <?php endif;?>
    </li>

