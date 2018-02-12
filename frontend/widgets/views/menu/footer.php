<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/11/18
 * Time: 1:33 PM
 */

use yii\helpers\Url;
?>

<ul class="footer-block-contant tagcloud">
    <?php foreach ($categories as $category): ?>
    <?php $langCategory = $category->getDataItems() ?>
        <li>
            <a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>"><?= $langCategory['name'] ?></a>
        </li>
    <?php endforeach;?>

</ul>
