<?php


namespace app\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/public/css/bootstrap.css',
        'web/public/css/component.css',
        'web/public/css/style.css',
        'web/public/css/animate.css',
        'web/public/css/hover_pack.css',
  //      'web/public/css/jquery.validate.css',

    ];
    public $js = [
       // 'web/public/js/jquery-2.1.4.min.js',
        'web/public/js/move-top.js',
        'web/public/js/easing.js',
//        'web/public/js/wow.min.js',
        'web/public/js/bootstrap.js',
        'web/public/js/jquery.cookie.js',

    ];
    public $depends = [

    ];

//    public function init()
//    {
//        parent::init();
//        Yii::$app->assetManager->bundles = [
//                'yii\bootstrap\BootstrapPluginAsset' => false,
//                'yii\bootstrap\BootstrapAsset' => false,
//                'yii\web\JqueryAsset' => false,
//            ];
//    }
}
