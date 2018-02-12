<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/11/18
 * Time: 12:14 PM
 */

use yii\helpers\Url;
?>

<ul>

    <?php foreach ($categories as $category): ?>
        <?php $langCategory = $category->getDataItems() ?>
        <?php $products = $category->getCountProducts($category->id) ?>
    <li><a href="<?= Url::to(['category/view', 'slug' => $category->slug])?>"><?= $langCategory['name'] ?> <span>(<?= $products ?>)</span></a></li>
    <?php endforeach; ?>
</ul>
