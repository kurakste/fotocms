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
        '/css/site.css',
    ];
    public $js = [
        /* 'ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', */
        '/js/up.js',
        '/js/parallax.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}
