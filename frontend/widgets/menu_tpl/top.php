<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10/19/17
 * Time: 7:04 PM
 */
use yii\helpers\Url;
?>


<li class="level">
    <a href="<?= Url::to(['category/view', 'id' => $category['id']]) ?>" class="page-scroll">
        <?= $category['name'] ?>
    </a>
</li>
<!---->
<!--<li class="level dropdown"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Город</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Город</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/painting-cities2.jpg" alt="city"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Городские пейзажи, дворики, сюжеты, связанные с городом, любовь здесь тоже присутствует.</p>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level dropdown"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Животные</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Животные</span></a>-->
<!--                            <ul class="sub-menu-level2 ">-->
<!--                                <li class="level3"><a href=""><span>■</span>Котомания</a></li>-->
<!--                                <li class="level3"><a href=""><span>■</span>Домашние</a></li>-->
<!--                                <li class="level3"><a href=""><span>■</span>Дикие</a></li>-->
<!---->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Миленькие котики, собачки, дикие животные, сильные тотемы и няшечки.</p>-->
<!---->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!---->
<!--                            <p>Все животное царство здесь и ждет своих хозяев.</p>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href=""> <img src="/frontend/web/images/animals.jpg" alt="animals"> </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level"><a href="shop.html" class="page-scroll">Натюрморты</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Натюрморты</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/natyurmort.jpg" alt="nature"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Все для любителей красоты и совершенства, подаренного нам щедрой природой и нарисованой талантливыми руками.</p>-->
<!---->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!---->
<!--                            <p>Ваш талант вдохнет новую жизнь и видение в полотна известных и неизвестных художников.</p>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level"><a href="shop.html" class="page-scroll">Природа</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Природа</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/313281_risunok.jpg" alt="city"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Красота пейзажей, нежность листьев и аромат цветов.</p>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Вдохновение и релаксация. Совершенство. Все здесь.</p>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level"><a href="shop.html" class="page-scroll">Религия</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Религия</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/bible.jpg" alt="city"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Человеку нужна вера. Без веры и милосердия нет духовности и силы. Есть существование.</p>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level"><a href="shop.html" class="page-scroll">Люди</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Люди</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/babulya.jpg" alt="people"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Люди, люди, люди, люди... Куда ж без них? С ними веселее. Иногда хотелось бы и отдохнуть от всех этих людей.</p>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Но не от наших людей! Вышитые люди не приносят боли и разочарования. Они дарят радость.</p>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->
<!--<li class="level"><a href="shop.html" class="page-scroll">Разное</a>-->
<!--    <div class="megamenu full mobile-sub-menu">-->
<!--        <div class="container">-->
<!--            <div class="megamenu-inner">-->
<!--                <div class="megamenu-inner-top">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span>Разное</span></a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2 visible-lg visible-md">-->
<!--                            <a href="shop.html"> <img src="/frontend/web/images/5558.jpg" alt="city"> </a>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Здесь мы собрали всякую всячину, которая вызывает эмоцию и поднимает настроение. </p>-->
<!--                            <p>Но которую нельзя отнести к нашим категориям по какому-либо признаку.</p>-->
<!--                        </div>-->
<!--                        <div class="col-md-3 level2"> <a href="shop.html"><span></span></a>-->
<!--                            <p>Хотя, это самый популярный раздел. Всегда интересно порыться в непонятно чем. </p>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</li>-->