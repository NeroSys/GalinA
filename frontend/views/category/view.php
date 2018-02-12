<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/11/18
 * Time: 1:39 PM
 */

use yii\helpers\Url;
use frontend\widgets\MenuWidget;
?>

<?php $langCategory = $category->getDataItems() ?>
<!-- BANNER STRAT -->
<div class="banner inner-banner ">
    <div class="container">
        <section class="banner-detail">
            <h1 class="banner-title"><?= $langCategory['name'] ?></h1>
            <div class="bread-crumb right-side">
                <ul>
                    <li><a href="<?= Url::to(['site/index']) ?>"><?= Yii::t('main', 'Главная')?></a>/</li>
                    <li><span><?= $langCategory['name'] ?></span></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
<section class="ptb-95 ">
    <div class="container">
        <div class="row">
            <div class="col-md-3  mb-xs-30">
                <div class="sidebar-block">
                    <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3><?= Yii::t('main', 'Категории')?></h3>
                        </div>
                        <div class="sidebar-contant">

                            <?= MenuWidget::widget(['tpl' => 'left']);?>

                        </div>
                    </div>
                    <div class="sidebar-box gray-box mb-40"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3>Shop by</h3>
                        </div>
                        <div class="sidebar-contant">
                            <div class="price-range mb-30">
                                <div class="inner-title">Price range</div>
                                <input class="price-txt" type="text" id="amount">
                                <div id="slider-range"></div>
                            </div>
                            <div class="mb-20">
                                <div class="inner-title">Color</div>
                                <ul>
                                    <li><a>Black <span>(0)</span></a></li>
                                    <li><a>Blue <span>(05)</span></a></li>
                                    <li><a>Brown <span>(10)</span></a></li>
                                </ul>
                            </div>
                            <div class="mb-20">
                                <div class="inner-title">Manufacture</div>
                                <ul>
                                    <li><a>Augue congue <span>(0)</span></a></li>
                                    <li><a>Eu magna <span>(05)</span></a></li>
                                    <li><a>Ipsum sit <span>(10)</span></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-color">Refine</a> </div>
                    </div>
                    <div class="sidebar-box mb-40 visible-md visible-lg"> <a href="#"> <img src="/frontend/web/images/left-banner.jpg" alt="ambar"> </a> </div>
                    <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3>Best Seller</h3>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                <li>
                                    <div class="pro-media"> <a><img alt="T-shirt" src="/frontend/web/images/1.jpg"></a> </div>
                                    <div class="pro-detail-info"> <a>Black African Print</a>
                                        <div class="rating-summary-block">
                                            <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                                        </div>
                                        <div class="price-box"> <span class="price">$80.00</span> </div>
                                        <div class="cart-link">
                                            <form>
                                                <button title="Add to Cart">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pro-media"> <a><img alt="T-shirt" src="/frontend/web/images/2.jpg"></a> </div>
                                    <div class="pro-detail-info"> <a>Black African Print</a>
                                        <div class="rating-summary-block">
                                            <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                                        </div>
                                        <div class="price-box"> <span class="price">$80.00</span> </div>
                                        <div class="cart-link">
                                            <form>
                                                <button title="Add to Cart">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pro-media"> <a><img alt="T-shirt" src="/frontend/web/images/3.jpg"></a> </div>
                                    <div class="pro-detail-info"> <a>Black African Print</a>
                                        <div class="rating-summary-block">
                                            <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                                        </div>
                                        <div class="price-box"> <span class="price">$80.00</span> </div>
                                        <div class="cart-link">
                                            <form>
                                                <button title="Add to Cart">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="shorting mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="view">
                                <div class="list-types grid active "> <a href="shop.html">
                                        <div class="grid-icon list-types-icon"></div>
                                    </a> </div>
                                <div class="list-types list"> <a href="shop-list.html">
                                        <div class="list-icon list-types-icon"></div>
                                    </a> </div>
                            </div>
                            <div class="short-by float-right-sm"> <span>Sort By</span>
                                <div class="select-item">
                                    <select>
                                        <option value="" selected="selected">Name (A to Z)</option>
                                        <option value="">Name(Z - A)</option>
                                        <option value="">price(low&gt;high)</option>
                                        <option value="">price(high &gt; low)</option>
                                        <option value="">rating(highest)</option>
                                        <option value="">rating(lowest)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="show-item right-side float-left-sm"> <span>Show</span>
                                <div class="select-item">
                                    <select>
                                        <option value="" selected="selected">24</option>
                                        <option value="">12</option>
                                        <option value="">6</option>
                                    </select>
                                </div>
                                <span>Per Page</span>
                                <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-listing">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/1.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon active"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/2.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/3.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/4.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/5.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/6.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/7.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon "><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/8.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/9.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/10.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/11.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/12.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/4.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/5.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/7.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="product-item">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="new-label"><span>New</span></div>
                                <div class="product-image"> <a href="product-page.html"> <img src="/frontend/web/images/9.jpg" alt=""> </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left left-side">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon "><a href="#"></a></li>
                                                <!--<li class="pro-compare-icon"><a href="#"></a></li>-->
                                                <li class="pro-rating-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                    <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="pagination-bar">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->
  
