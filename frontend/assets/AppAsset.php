<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/jquery-ui.css',
        'css/owl.carousel.css',
        'css/fotorama.css',
        'css/magnific-popup.css',
        'css/custom.css',
        'css/responsive.css',
    ];
    public $js = [

        'js/jquery-ui.min.js',
        'js/fotorama.js',
        'js/jquery.magnific-popup.js',
        'js/owl.carousel.min.js',
        'js/jquery.cookie.js',
        'js/jquery.accordion.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
