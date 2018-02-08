<?php
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="http://placehold.it/128x128" alt=""><?= Yii::$app->user->identity->username ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                        <?php
                        NavBar::begin([

                            'options' => [
                                'class' => 'nav',
                            ],
                        ]);

                        $menuItems[] = '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout',
                                ['class' => 'btn logout']
                            )
                            . Html::endForm()
                            . '</li>';

                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);

                        NavBar::end();
                        ?>

                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a href="/">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>