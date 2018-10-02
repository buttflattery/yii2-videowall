<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace buttflattery\videowall;

class VideowallAsset extends \yii\web\AssetBundle {

    public $sourcePath = __DIR__.'/assets/';
    public $baseUrl = '@web';
    public $css = [
        '//vjs.zencdn.net/6.2.8/video-js.css',
        'css/video-wall.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Roboto',
    ];
    public $js = [
        '//vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js',
        '//vjs.zencdn.net/6.2.8/video.js',
        '//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js',
        'js/video-wall.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'kartik\select2\Select2Asset',
    ];
}
