<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10/19/17
 * Time: 7:04 PM
 */
use yii\helpers\Url;
?>

<?php foreach ($categories as $category) {?>
  <?php $lang_category = $category->getDataItems(); ?>

<li class="level dropdown"> <span class="opener plus"></span>
    <a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>" class="page-scroll">
        <?= $lang_category['name'] ?>
    </a>
    <div class="megamenu full mobile-sub-menu">
        <div class="container">
            <div class="megamenu-inner">
                <div class="megamenu-inner-top">
                    <div class="row">
                        <div class="col-md-3 level2"> <a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>"><span><?= $lang_category['name'] ?></span></a>
                        </div>
                        <div class="col-md-3 level2 visible-lg visible-md">
                            <a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>">
                                <img src="<?= $category->getImageLogo() ?>" alt="<?= $lang_category['name'] ?>">
                            </a>
                        </div>
                        <div class="col-md-3 level2"> <a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>"><span></span></a>
                            <p><?= $lang_category['description'] ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

<?} ?>
