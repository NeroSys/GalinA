<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 2/8/18
 * Time: 1:25 PM
 */
use frontend\widgets\TopMenuWidget;
?>

<!-- HEADER START -->
<header class="navbar navbar-custom " id="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="top-link top-link-left">
                            <ul>
                                <li class="language-icon">
                                    <select>
                                        <option selected="selected" value="">En</option>
                                        <option value="">Ru</option>

                                    </select>
                                </li>
                                <li class="sitemap-icon">
                                    <select>
                                        <option selected="selected" value="">EUR</option>
                                        <option value="">USD</option>
                                        <option value="">RUR</option>
                                    </select>
                                </li>
                                <li class="welcome-msg"> Магия крестиков! </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="right-side float-left-xs header-right-link">
                            <ul>
                                <li class="main-search">
                                    <div class="header_search_toggle desktop-view">
                                        <form>
                                            <div class="search-box">
                                                <input class="input-text" type="text" placeholder="Search here...">
                                                <button class="search-btn"></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="account-icon"> <a href="#"><span></span></a>
                                    <div class="header-link-dropdown account-link-dropdown">
                                        <ul class="link-dropdown-list">
                                            <li> <span class="dropdown-title">Magic!</span>
                                                <ul>
                                                    <li><a href="login.html">Sign In</a></li>
                                                    <li><a href="register.html">Create an Account</a></li>
                                                </ul>
                                            </li>
                                            <li> <span class="dropdown-title">Language :</span>
                                                <ul>
                                                    <li><a class="active" href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">German</a></li>
                                                </ul>
                                            </li>
                                            <li> <span class="dropdown-title">Currency :</span>
                                                <ul>
                                                    <li><a class="active" href="#">USD</a></li>

                                                    <li><a href="#">EUR</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="cart-icon"> <a href="#"> <span> <small class="cart-notification">0</small> </span> </a>
                                    <div class="cart-dropdown header-link-dropdown">
                                        <ul class="cart-list link-dropdown-list">
                                            <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                <div class="media"> <a class="pull-left"> <img alt="Ambar" src="/frontend/web/images/1.jpg"></a>
                                                    <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                                                        <p class="cart-price">$14.99</p>
                                                        <div class="product-qty">
                                                            <label>Qty:</label>
                                                            <div class="custom-qty">
                                                                <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                <div class="media"> <a class="pull-left"> <img alt="Ambar" src="/frontend/web/images/2.jpg"></a>
                                                    <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                                                        <p class="cart-price">$14.99</p>
                                                        <div class="product-qty">
                                                            <label>Qty:</label>
                                                            <div class="custom-qty">
                                                                <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="cart-sub-totle">
                                            <span class="pull-left">Cart Subtotal</span>
                                            <span class="pull-right">
		                  		<strong class="price-box">$29.98</strong>
		                  	</span>
                                        </p>
                                        <div class="clearfix"></div>
                                        <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-inner">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                    <a href="index.html"> <img alt="Galin-A" src="/frontend/web/images/logo.png"></a> </div>
                <div class="right-side float-none-sm">
                    <div id="menu" class="navbar-collapse collapse left-side" >
                        <ul class="nav navbar-nav navbar-left">

                            <?= TopMenuWidget::widget();?>


                        </ul>
                    </div>
                </div>
                <div class="header_search_toggle mobile-view">
                    <form>
                        <div class="search-box">
                            <input class="input-text" type="text" placeholder="Search entire store here...">
                            <button class="search-btn"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->
