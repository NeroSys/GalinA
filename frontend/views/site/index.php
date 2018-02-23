<?php

/* @var $this yii\web\View */

use frontend\widgets\MenuWidget;
use yii\helpers\Url;

$this->title = '';


?>


<!--  Site Services Features Block Start  -->
<section class=" services-icon ">
    <div class="container">
        <div class="ser-feature-block center-sm">
            <div class="row">

            </div>
        </div>
    </div>
</section>
<!--  Site Services Features Block End  -->

<!-- BANNER STRAT -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar-box  visible-md visible-lg">
                    <a>
                        <img alt="ambar" src="/frontend/web/images/awesome-art.jpg">
                    </a>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="banner">
                    <div class="main-banner">
                        <div class="banner-2">
                            <img src="/frontend/web/images/340167_gyendalf_risunok_natura_udachnyj_1980x1200_(www.GetBg.net).jpg" alt="Cabinet1">
                            <div class="banner-detail">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-4"></div>
                                    <div class="col-sm-7 col-xs-8">
                                        <div class="banner-detail-inner">
                                            <span class="slogan">Наша мастерская</span>
                                            <h1 class="banner-title">По Вашей фото <br>или картинке</h1>
                                            <a href="shop.html" class="btn btn-color">Заказать схемку</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-1">
                            <img src="/frontend/web/images/cabineto.png" alt="Cabinet">
                            <div class="banner-detail">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-4"></div>
                                    <div class="col-sm-7 col-xs-8">
                                        <div class="banner-detail-inner">
                                            <span class="slogan">Заказать схемку</span>
                                            <h1 class="banner-title">Мастерская <br> схемок </h1>
                                            <a href="shop.html" class="btn btn-color">В мастерскую</a>
                                        </div>
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
<!-- BANNER END -->

<!-- CONTAIN START -->


<div class="pt-70">
    <div class="container">
        <div class="row">
            <div class="col-md-9 right-side float-none-sm">
                <!--  Featured Products Slider Block Start  -->
                <section class="">
                    <div class="product-slider">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="heading-part mb-30">
                                    <h2 class="main_title"><?= Yii::t('category', 'Новинки') ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pro_cat">
                                <div class="owl-carousel pro_cat_slider">
                                    <?php if (!empty($new)): ?>
                                    <?php foreach ($new as $item): ?>
                                        <?php $lang_item = $item->getDataItems() ?>
                                        <?php $price_item = $item->getPrice($item->id, $lang_item['lang_id'])?>
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
                                                        <img src="/frontend/web/images/b.jpg" alt="">
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
                                                    <?php $currency = $item->getCurrName($price_item['currency_id']) ?>
                                                    <div class="product-item-name">
                                                        <a href="<?= Url::to(['product/view', 'slug' => $item->slug])?>"><?= $lang_item['title'] ?></a>
                                                    </div>
                                                    <div class="price-box"> <span class="price"><?= $currency ?> <?= $price_item['price'] ?></span>

                                                        <?php if (!empty($price_item['oldPrice'])): ?>
                                                        <del class="price old-price"><?= $currency ?> <?= $price_item['oldPrice']?></del> </div>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  Featured Products Slider Block End  -->

                <div class="pt-70 visible-md visible-lg">
                    <div class="sub-banner-block ">
                        <div class="sub-banner sub-banner4">
                            <a>
                                <img src="/frontend/web/images/3.png" alt="ambar">
                                <div class="sub-banner-effect"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!--  Featured Products Slider Block Start  -->
                <section class="pt-70">
                    <div class="product-slider">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="heading-part  mb-30">
                                    <h2 class="main_title"><?= Yii::t('category', 'Хиты продаж') ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pro_cat">
                                <div class="owl-carousel pro_cat_slider">
                                    <?php if (!empty($hits)): ?>
                                    <?php foreach ($hits as $hit): ?>
                                    <?php $lang_hit = $hit->getDataItems() ?>
                                    <?php $price_hit = $hit->getPrice($hit->id, $lang_hit['lang_id'])?>
                                    <div class="item">
                                        <div class="product-item">
                                            <?php if ($hit->sale == 1): ?>
                                            <div class="sale-label"><span>Sale</span></div>
                                            <?php endif; ?>
                                            <?php if ($hit->new == 1):?>
                                            <div class="new-label"><span>New</span></div>
                                            <?php endif;?>
                                            <div class="product-image"> <a href="<?= Url::to(['product/view', 'slug' => $hit->slug])?>"> <img src="/frontend/web/images/b.jpg" alt=""> </a>
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
                                                <?php $currency = $hit->getCurrName($price_hit['currency_id']) ?>
                                                <div class="product-item-name">
                                                    <a href="<?= Url::to(['product/view', 'slug' => $hit->slug])?>"><?= $lang_hit['title'] ?></a>
                                                </div>
                                                <div class="price-box"> <span class="price"><?= $currency ?> <?= $price_hit['price'] ?></span>

                                                    <?php if (!empty($price_hit['oldPrice'])): ?>
                                                    <del class="price old-price"><?= $currency ?> <?= $price_hit['oldPrice']?></del> </div>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--  Featured Products Slider Block End  -->




            </div>
            <div class="col-md-3 mb-xs-30 left-side float-none-sm">
                <div class="sidebar-block">
                    <div class="sidebar-box listing-box mb-40">
                        <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3>Категории</h3>
                        </div>
                        <div class="sidebar-contant">

                            <?= MenuWidget::widget(['tpl' => 'left']);?>

                        </div>
                    </div>
                    <div class="sidebar-box sidebar-item mb-40"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3><?= Yii::t('category', 'Распродажа') ?></h3>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                <?php if (!empty($sales)): ?>
                                <?php foreach ($sales as $sale): ?>
                                <?php $lang_sale = $sale->getDataItems() ?>
                                    <?php $price_sale = $sale->getPrice($sale->id, $lang_sale['lang_id'])?>
                                <li>
                                    <div class="pro-media">
                                        <a href="<?= Url::to(['product/view', 'slug' => $sale->slug]) ?>">
                                            <img alt="T-shirt" src="/frontend/web/images/b.jpg">
                                        </a>
                                    </div>
                                    <div class="pro-detail-info"> <a href="<?= Url::to(['product/view', 'slug' => $sale->slug]) ?>"><?= $lang_sale['title'] ?></a>
                                        <!-- <div class="rating-summary-block">
                                            <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                                        </div> -->
                                        <?php $currency = $sale->getCurrName($price_sale['currency_id']) ?>
                                        <div class="price-box"> <span class="price"><?= $currency ?> <?= $price_sale['price'] ?></span> </div>
                                        <div class="cart-link">
                                            <form>
                                                <button title="Add to Cart">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box mb-40 visible-md visible-lg">
                        <a href="#"> <img src="/frontend/web/images/1392834717_www.radionetplus.ru-2.jpg" alt="ambar"> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- CONTAINER END -->