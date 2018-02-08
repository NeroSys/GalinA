<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10/19/17
 * Time: 8:33 PM
 */
use yii\helpers\Url;
?>

<li>
    <a href="<?= Url::to(['category/view', 'id' => $category['id']]) ?>">
        <span>■</span> <?= $category['name'] ?>
    </a>
</li>

