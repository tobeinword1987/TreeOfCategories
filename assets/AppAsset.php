<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'styles/style.css',
        'semantic/semantic.min.css',
        'bootstrap-3.3.7-dist/css/bootstrap.css',
        'maxazan-jquery-treegrid/css/jquery.treegrid.css'
    ];
    public $js = [
        'js/jquery.js',
        'bootstrap-3.3.7-dist/js/bootstrap.js',
        'maxazan-jquery-treegrid/js/jquery.treegrid.js',
        'js/Site.js',
        'semantic/semantic.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}