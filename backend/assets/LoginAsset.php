<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 1/22/18
 * Time: 12:13 AM
 */

namespace backend\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'fonts/css/font-awesome.min.css',
        'css/animate.min.css',
        'css/custom.css',
        'css/icheck/flat/green.css',
        ];
    public $js = [
        'js/jquery.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yiister\gentelella\assets\Asset',
    ];
}