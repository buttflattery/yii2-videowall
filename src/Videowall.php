<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace buttflattery\videowall;

use buttflattery\videowall\VideowallAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\web\View;

class Videowall extends \yii\base\Widget {

    public $videoTagOptions = [];

    /* WALL TYPES CONSTANTS */

    const TYPE_CAROUSEL = 'carousel';
    const TYPE_PLAYLIST = 'playlist';
    const TYPE_THUMB = 'thumb';
    //default message 
    const MSG_NOJAVASCRIPT = 'To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>';

    //carousel,thumb,playlist
    public $wallType = self::TYPE_CAROUSEL;
    /// delay between the slideshow
    public $slideShowDelay = 2000;
    //videos list for the carousel & thumbnail mode, see below for usage example.
    public $videos = [];
    //    'videos' => [
    //        [
    //            "src" => "/video-uploads/jaan-jatti.mp4",
    //            "mime" => 'video/mp4',
    //            "poster" => "/video-uploads/posters/playlist-1.jpg",
    //            "title" => "Sweet Sexy Savage",
    //        ], 
    //        [
    //            "src" => '/video-uploads/mera-jehan.mp4',
    //            'poster' => '/video-uploads/posters/2.jpg',
    //            'mime' => 'video/mp4',
    //            'title' => 'Video 2',
    //        ], 
    //        [
    //            'src' => '/video-uploads/mitran-de-boot.mp4',
    //            'poster' => '/video-uploads/posters/3.jpg',
    //            'mime' => 'video/mp4',
    //            'title' => 'Video 3',
    //        ], 
    //        [
    //            'src' => '/video-uploads/mutiyar.mp4',
    //            'poster' => '/video-uploads/posters/4.jpg',
    //            'mime' => 'video/mp4',
    //            'title' => 'Video 4',
    //        ], 
    //        [
    //            'src' => '/video-uploads/raashi-sood.mp4',
    //            'poster' => '/video-uploads/posters/5.jpg',
    //            'mime' => 'video/mp4',
    //            'title' => 'Video 5',
    //        ],
    //    ],
    //You can pass the playlists if you have your videos categorized into different playlists. You use this option INSTEAD of videos, 
    //and pass the playlist videos inside this array. See the below example array to see how.
    public $playlists = [];

//      'playlists' => [
//            [
//            'name' => 'Sweet Sexy Savage',
//            'cover' => '/video-uploads/posters/playlist-1.jpg',
//            'videos' => [
//                [
//                'src' => '/video-uploads/sample1.mp4',
//                'poster' => '/video-uploads/posters/sample1.png',
//                'mime' => 'video/mp4',
//                'title' => 'Circus Juggler Video',
//                ],
//                [
//                'src' => '/video-uploads/sample1.mp4',
//                'poster' => '/video-uploads/posters/sample1.png',
//                'mime' => 'video/mp4',
//                'title' => 'Circus Juggler Video',
//                ],
//                [
//                'src' => '/video-uploads/sample2.mp4',
//                'poster' => '/video-uploads/posters/sample2.png',
//                'mime' => 'video/mp4',
//                'title' => 'Deep Space Star Acts',
//                ],
//                ],
//            ],
//            
//            [
//            'name' => 'Hope',
//            'cover' => '/video-uploads/posters/playlist-2.jpg',
//            'videos' => [
//                [
//                'src' => '/video-uploads/sample1.mp4',
//                'poster' => '/video-uploads/posters/sample1.png',
//                'mime' => 'video/mp4',
//                'title' => 'Circus Juggler Video',
//                ],
//                [
//                'src' => '/video-uploads/sample1.mp4',
//                'poster' => '/video-uploads/posters/sample1.png',
//                'mime' => 'video/mp4',
//                'title' => 'Circus Juggler Video',
//                ],
//                [
//                'src' => '/video-uploads/sample1.mp4',
//                'poster' => '/video-uploads/posters/sample1.png',
//                'mime' => 'video/mp4',
//                'title' => 'Circus Juggler Video',
//                ],
//            ],
//        ],
    //class for the video wall container
    public $videoWallContainer = 'video-wall-container';
    //slides container id
    public $containerId = 'video-wall-slides';
    // slides container class
    public $containerClass = "slides-container";
    public $helpImproveVideoJS = false;
    public $thumbPageSize = 15;
    public $playlistPageSize = 8;
//    public $loadSelectAssets = true;
    public $loadBootstrapAssets = false;
    public $bootstrapCssSource = '';
    public $bootstrapJsSource = '';
//    public $select2CssSource = '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css';
//    public $select2JsSource = '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js';
    public $select2Defaults = [
        'allowClear' => true,
        // "closeOnSelect"=> false,
        'theme' => "default",
        'width' => "100%",
        'placeholder' => "Search Videos",
        'minimumInputLength' => 2,
        'dropdownCssClass' => 'bigdrop',
    ];
    public $openOnStart = true;
    // after init call back event
    public $callback = 'function(){}';
    //plugin events 
    public $clientEvents = [];

    public function init() {
        parent::init();
        //assign id if not assigned via options
        if( !isset($this->videoTagOptions['id']) ){
            $this->videoTagOptions['id'] = $this->getId();
        }
        //register css andjs assets
        $this->registerAssets();
    }

    public function run() {
        parent::run();

        //add default classes to the class option for the video tag
        Html::addCssClass($this->videoTagOptions, ['video-js', 'vjs-default-skin', 'vjs-big-play-centered']);

        //get setup options for the video js
        $setupOptionsPassed = !isset($this->videoTagOptions['setupOptions']) || $this->videoTagOptions['setupOptions'] == '';
        $setupOptions = ($setupOptionsPassed) ? $this->videoSetupDefaults() : ArrayHelper::merge($this->videoSetupDefaults(), $this->videoTagOptions['setupOptions']);

        //remove setupOptions from the options
        unset($this->videoTagOptions['setupOptions']);

        $this->videoTagOptions = ArrayHelper::merge($this->videoTagDefaults(), $this->videoTagOptions);
        $this->videoTagOptions['data'] = ['setup' => $setupOptions];
        //render video wall defaults and return the html 
        return $this->renderVideoWall();
    }

    /**
     * Renders the video wall html tags 
     * @return type html
     */
    public function renderVideoWall() {
        $html = Html::beginTag('video', $this->videoTagOptions);
        $html .= Html::tag('p', self::MSG_NOJAVASCRIPT, ['class' => "vjs-no-js"]);
        $html .= Html::endTag('video');
        return $html;
    }

    /**
     * Registers the necessary assets for the plugin 
     * and initializes the plugin with the options
     */
    private function registerAssets() {
        //get view
        $view = $this->getView();
        
        //register default libraries for the plugin
        VideowallAsset::register($view);

        //get client options
        $clientOptions = Json::encode($this->getClientOptions(), true);

        //get the assigned id of the widget element
        $elemId = $this->videoTagOptions['id'];

        /* Add client script for initializing the video wall */
        $js = <<< JS
                var videoWall_{$elemId}=$("#{$elemId}").idowsVideowall({$clientOptions});
JS;
        foreach( $this->clientEvents as $event => $callBack ){
            $jsExpressionCallback = new JsExpression($callBack);
            $js .= <<< JS
                 videoWall_{$elemId}.on("{$event}",{$jsExpressionCallback});
JS;
        }
        $css = <<< CSS
        #{$elemId} {
            margin: 10px auto 0;
        }
CSS;
        //register the custom js 
        $view->registerJs($js, View::POS_READY);
        //register the custom css
        $view->registerCss($css);
    }

    private function getClientOptions() {

//init options for the videowall plugin
        return ([
            'wallType' => $this->wallType,
            'slideshowDelay' => $this->slideShowDelay,
            'videoWallContainer' => $this->videoWallContainer,
            'containerId' => $this->containerId,
            'containerClass' => $this->containerClass,
            'helpImproveVideoJS' => $this->helpImproveVideoJS,
            'thumbPageSize' => $this->thumbPageSize,
            'playlistPageSize' => $this->playlistPageSize,
            'videos' => $this->videos,
            'playlists' => $this->playlists,
//            'loadSelectAssets' => $this->loadSelectAssets,
            'loadBootstrapAssets' => $this->loadBootstrapAssets,
//            'bootstrapCssSource' => $this->bootstrapCssSource,
//            'bootstrapJsSource' => $this->bootstrapJsSource,
//            'select2CssSource' => $this->select2CssSource,
//            'select2JsSource' => $this->select2JsSource,
            'openOnStart' => $this->openOnStart,
            'callback' => new JsExpression($this->callback),
            'select2Defaults' => $this->select2Defaults
        ]);
    }

    private function videoTagDefaults() {
        return [
            'width' => "500",
            'data' => '{}',
            'poster' => $this->getView()->assetBundles[VideowallAsset::class]->baseUrl . "/poster.jpg",
        ];
    }

    private function videoSetupDefaults() {
        return [
            'controls' => true,
            'autoplay' => false,
            'preload' => 'auto',
        ];
    }

}
