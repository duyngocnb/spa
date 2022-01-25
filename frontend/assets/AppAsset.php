<?php

namespace frontend\assets;

use Yii;
use yii\web\View;
use yii\helpers\Url;
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
        'css/m-extend.css',
        'css/style.css',
        'css/media.css',
        'https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css'
    ];
    public $js = [
        'js/m-extend/jquery.mobile-events.min.js',
        'js/m-extend/m-extend.js',
        'js/holder.js',     
        'js/jquery.blockUI.js',
        'js/custom.js',
        'https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    public function init()
    {
        parent::init();

        Yii::$app->view->registerJsVar('baseUrl', Url::base());
    }
}
