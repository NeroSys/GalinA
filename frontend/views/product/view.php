<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/24/18
 * Time: 8:17 PM
 */

use yii\helpers\Html;
use yii\helpers\Url;

$lang_product = $product->getDataitems();
$price = $product->getPrice($product->id);
$lang_category = $category->getDataItems();
?>



<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <section class="banner-detail">
            <h1 class="banner-title"><?= $lang_category['title'] ?></h1>
            <div class="bread-crumb right-side">
                <ul>
                    <li><a href="<?= Url::to(['site/index']) ?>"><?= Yii::t('main', 'Главная')?></a>/</li>
                    <li><a href="<?= Url::to(['category/view', 'slug' => $category->slug]) ?>"><span><?= $lang_category['title'] ?></span></a></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
<section class=" pt-95">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 mb-xs-30">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                    <a href="#"><?= Html::img("@web/images/{$product->img}") ?>" alt="<?= $product->name ?></a>
                </div>
            </div>


            <div class="col-md-7 col-sm-7">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="product-detail-main">
                            <div class="product-item-details">
                                <h1 class="product-item-name"><?= $lang_product['title'] ?></h1>

                                <div class="price-box"> <span class="price"><?= $currency->sign ?><?= $price['price'] ?></span>
                                    <?php if (!empty($price['oldPrice']) && $price['price'] < $price['oldPrice']): ?>
                                    <del class="price old-price"><?= $currency->sign ?><?= $price['oldPrice'] ?></del> </div>
                                    <?php endif;?>
                                <div class="product-info-stock-sku">
                                    <div>
                                        <label><?= Yii::t('product', 'Галлерея отшивов') ?>: </label>

                                        <span class="info-deta"><?php if (!empty($reviews)){ echo Yii::t('product', 'Да');}else{ echo Yii::t('product', 'Нет');} ?></span>


                                    </div>
                                    <div>
                                        <label><?= Yii::t('product', 'Артикул') ?>: </label>
                                        <span class="info-deta"><?= $product->id ?></span> </div>
                                </div>
                                <p><?= $lang_product['description'] ?></p>

                                <div class="mb-40">
                                    <div class="product-qty">
                                        <label for="qty"><?= Yii::t('product', 'Количество') ?>:</label>
                                        <div class="custom-qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                    <div class="bottom-detail cart-button">
                                        <ul>
                                            <li class="pro-cart-icon">
                                                <form>
                                                    <button title="Add to Cart" class="btn-buy"><span></span><?= Yii::t('product', 'Добавить в список покупок') ?></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="share-link">
                                    <label>Share This : </label>
                                    <div class="social-link">
                                        <ul class="social-icon">
                                            <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                                            <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                                            <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ptb-95">
    <div class="container">
        <div class="product-detail-tab">
            <div class="row">
                <div class="col-md-12">
                    <div id="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="tab-Description selected" title="Description"><?= Yii::t('product', 'Описание') ?></a></li>
                            <li><a class="tab-Product-Tags" title="Product-Tags"><?= Yii::t('product', 'Отшивы') ?></a></li>
                            <li><a class="tab-Reviews" title="Reviews"><?= Yii::t('product', 'Комментарии') ?></a></li>
                        </ul>
                    </div>
                    <div id="items">
                        <div class="tab_content">
                            <ul>
                                <li>
                                    <div class="items-Description selected gray-bg">
                                        <div class="Description">
                                            <strong><?= $lang_product['title'] ?></strong><br />
                                            <p><?= $lang_product['text'] ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Product-Tags gray-bg">
                                        <?php if (!empty($reviews)){ ?>
                                        <strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br />
                                        t odit aut fugit, sed quia consequuntur
                                            <?php }else{?>
                                            <strong><?= Yii::t('product', 'Фото с отшивами нам пока еще не присылали') ?></strong><br />
                                            <?= Yii::t('product', 'Мы очень ждем фотографии работ от Вас и наших покупателей.') ?>
                                        <?}?>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Reviews gray-bg">
                                        <div class="comments-area">
                                            <h4>Comments<span>(2)</span></h4>
                                            <ul class="comment-list mt-30">
                                                <li>
                                                    <div class="comment-user"> <img src="/frontend/web/images/comment-user.jpg" alt="ambar"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2016</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                    <ul class="comment-list child-comment">
                                                        <li>
                                                            <div class="comment-user"> <img src="/frontend/web/images/comment-user.jpg" alt="ambar"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2016</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-user"> <img src="/frontend/web/images/comment-user.jpg" alt="ambar"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2016</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment-user"> <img src="/frontend/web/images/comment-user.jpg" alt="ambar"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2016</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-form mt-30">
                                            <h4><?= Yii::t('product', 'Задайте вопрос, оставьте комментарий или фото отшива. Спасибо!') ?></h4>
                                            <div class="row mt-30">
                                                <form >
                                                    <div class="col-sm-4 mb-30">
                                                        <input type="text" placeholder="Имя" required>
                                                    </div>
                                                    <div class="col-sm-4 mb-30">
                                                        <input type="email" placeholder="Email" required>
                                                    </div>
                                                    <div class="col-sm-4 mb-30">
                                                        <input type="text" placeholder="Загрузите файл" required>
                                                    </div>
                                                    <div class="col-xs-12 mb-30">
                                                        <textarea cols="30" rows="3" placeholder="Сообщение" required></textarea>
                                                    </div>
                                                    <div class="col-xs-12 mb-30">
                                                        <button class="btn-buy" name="submit" type="submit">Отправить письмо</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-95">
    <div class="container">
        <div class="product-slider">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading-part align-center mb-40">
                        <h2 class="main_title"><?= Yii::t('product', 'Похожие товары')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pro_cat">
                    <div id="related_products" class="owl-carousel  ">
                        <?php if (!empty($goods)){ ?>
                        <?php foreach ($goods as $item){ ?>
                                <?php $lang_item = $item->getDataItems() ?>
                                <?php $price_item = $item->getPrice($item->id) ?>
                        <div class="item">
                            <div class="product-item">
                                <?php if ($item->sale == 1): ?>
                                    <div class="sale-label"><span>Sale</span></div>
                                <?php endif; ?>
                                <?php if ($item->new == 1):?>
                                    <div class="new-label"><span>New</span></div>
                                <?php endif;?>
                                <div class="product-image">
                                    <a href="<?= Url::to(['product/view', 'slug' => $item->slug])?>">
                                        <?= Html::img("@web/images/{$item->img}", ['alt' => $item->name]) ?>
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left ">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon active"><a href="#"></a></li>
                                                <!-- <li class="pro-compare-icon"><a href="#"></a></li> -->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="<?= Url::to(['product/view', 'slug' => $item->slug])?>">
                                            <?= $lang_item['title'] ?>
                                        </a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price"><?= $currency->sign ?> <?= $price_item['price'] ?></span>
                                        <?php if (!empty($price_item['oldPrice']) && $price_item['price'] < $price_item['oldPrice']){ ?>
                                            <del class="price old-price"><?= $currency->sign ?> <?= $price_item['oldPrice']?></del>
                                        <?}?>
                                    </div>

                                </div>
                            </div>
                        </div>
                            <?}?>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END --> 
  