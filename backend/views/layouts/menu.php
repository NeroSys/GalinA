<?php
use yii\helpers\Url;
?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= Url::home() ?>" class="site_title"><i class="fa fa-paw"></i> <span>Управление</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3><?= Yii::$app->user->identity->username ?></h3>
                <?=
                \yiister\gentelella\widgets\Menu::widget(
                    [
                        "items" => [
                            ["label" => "Главная", "url" => Url::home(), "icon" => "home"],
                            ["label" => "Категории", "url" => ["category/index"], "icon" => "files-o"],
                            [
                                "label" => "Товары",
                                "icon" => "th",
                                "url" => "#",
                                "items" => [
                                    ["label" => "Ассортимент", "url" => ["products/index"]],
                                    ["label" => "Валюты магазина", "url" => ["currency/index"]],
                                ],
                            ],
                            [
                                "label" => "Мультиязычность",
                                "icon" => "th",
                                "url" => "#",
                                "items" => [
                                    ["label" => "Языки сайта", "url" => ["lang/index"]],
                                    ["label" => "Переводы сообщений", "url" => ["/translations"]],
                                ],
                            ],
                            [
                                "label" => "Страницы",
                                "url" => "#",
                                "icon" => "table",
                                "items" => [
                                    [
                                        "label" => "Страницы сайта",
                                        "url" => ["pages/index"],
                                        "badge" => "123",
                                    ],
                                ],
                            ],
                            ["label" => "Пользователи", "url" => ["user/index"], "icon" => "user"],
                            ["label" => "Сообщения", "url" => ["messages/index"], "icon" => "files-o"],
                            ["label" => "Подписчики", "url" => ["subscription/index"], "icon" => "user"],
//                            [
//                                "label" => "Multilevel",
//                                "url" => "#",
//                                "icon" => "table",
//                                "items" => [
//                                    [
//                                        "label" => "Second level 1",
//                                        "url" => "#",
//                                    ],
//                                    [
//                                        "label" => "Second level 2",
//                                        "url" => "#",
//                                        "items" => [
//                                            [
//                                                "label" => "Third level 1",
//                                                "url" => "#",
//                                            ],
//                                            [
//                                                "label" => "Third level 2",
//                                                "url" => "#",
//                                            ],
//                                        ],
//                                    ],
//                                ],
//                            ],
                        ],
                    ]
                )
                ?>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">

            <a href="<?= Url::to(['/site/logout']) ?>" data-method="post" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>