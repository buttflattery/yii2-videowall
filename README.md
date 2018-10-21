# Yii2-VideoWall(v1.0)

### What is this repository for? ###

A Yii2 plugin based on [idows-videojs-videowall](https://github.com/buttflattery/idows-videojs-videowall) that creates a Video Wall for VIDEOJS video player using three different modes.

* Carousel (Default)
* Thumbnail
* Playlist

For details on the javascript plugin you can visit the link https://github.com/buttflattery/idows-videojs-videowall

### External Libraries Used ###
* [Idows VideoJS-VideoWall](https://github.com/buttflattery/idows-videojs-videowall).
* [VideoJs](http://videojs.com/) Library
* [MustacheJS](https://github.com/janl/mustache.js/) for Templating
* [jQuery v2.2.4](https://jquery.com/download/)
* Fontawesome
* [kartik-v/yii2-widget-select2](https://github.com/kartik-v/yii2-widget-select2)
* [Bootstrap v3.3.7](https://getbootstrap.com/docs/3.3/)

### DEMOS ###
- [Carousel](http://yii2plugins.idowstech.com/videowall/carousel)
- [Thumbnail](http://yii2plugins.idowstech.com/videowall/thumbnail)
- [Playlist](http://yii2plugins.idowstech.com/videowall/playlist)

### How do I get set up? ###

use composer to install the extension 

```
php composer.phar require  buttflattery/yii2-videowall "@dev" 
```

or add into the `composer.json` file under `require` section

```composer
"buttflattery/yii2-videowall":"@dev"
```
### Demos ###
- [Carousel Mode](http://yii2plugins.idowstech.com/videowall/carousel).
- [Thumbnail Mode](http://yii2plugins.idowstech.com/videowall/thumbnail).
- [Playlist Mode](http://yii2plugins.idowstech.com/videowall/thumbnail).

### Available Options ###

- `videoTagOptions (array)`: Attributes for the the default video tag used by videoJs to initialize the player. You can pass the following options for the video tag.

    - `class` : Html class for the the video tag.
    - `width` : Width for the video tag.
    - `height` : Height for the video tag.
    - `setupOptions` : The setup options for the video tag used inside the `data-setup` attribute, below are few of the options commonly used by the videoJS player.
        - `controls` : Default value `true`.
        - `autoplay` : Default value `true`.
        - `preload` : Default value `auto`.
    - `poster (path)` : Path for the default poster for the video tag, use path relative to the web directory.
- `wallType (string)` : 
    - `Videowall::TYPE_CAROUSEL` (carousel)
    - `Videowall::TYPE_THUMBNAIL` (thumbnail)
    - `Videowall::TYPE_PLAYLIST` (playlist)
- `slideShowDelay (milliseconds)` : integer, default value 2000 ms.
- `videoWallContainer (string)`: container class name for the video wall, default class `video-wall-container`.
- `containerId (string)` : container id for the video wall slides, default id prefix `video-wall-slides`.
- `containerClass (string)` : container class name for the video wall  slides, default class `slides-container`.
- `helpImproveVideoJs (boolean)` : `true` or `false` used by the videoJS player.
- `thumbPageSize (int)` : page size for the thumbnails mode, default value `15`.
- `playlistPageSize (int)` : page size for the playlist model, default value `8`.
- `loadBootstrapAssets (boolean)` : select if plugin should load the bootstrap assets or use the globally registered yii bootstrap assets, by default this option is `false` and Yii2 default assets bundle is used.
- `bootstrapCssSource (url)` : url to the bootstrap css file for the plugin to load, this option is effective when you have `"loadBootstrapAssets"=>true`.
- `bootstrapJsSource (url)` : url to the boootstrap js file for the plugin to load, this option is effective when you have `"loadBootstrapAssets"=>true`.
- `select2Defaults (array)` : default options used for rendring the kartik-v\yii2-select2 plugin, you override them and add you own too look into documentation for the options
    - `allowClear`: default value `true`.
    - `theme` : default value `default`.
    - `width` : default value `100%`.
    - `placeholder` : default value `Search Videos`.
    - `minimumInputlength` : default value `2`.
    - `dropdownCssClass` : default value `bigdrop`.
- `openOnStart (boolean)` : Select if the video wall is open when player is initialized, default value is `true`.
- `callback (function)`: a callback function called by the plugin after initialized.
- `clientEvents (array)` : an array of client events supported by the plugin, you can see the plugin [documentation](https://github.com/buttflattery/idows-videojs-videowall) for the supported events, you can use them like below
```
"pluginEvents"=>[
    'onBeforeNext' => 'function(event,dataObj){console.log(event);}',
]
```

### Usage 1 Carousel Mode ###
```php
<?php
        use buttflattery\videowall\Videowall;
        echo Videowall::widget([
            'videoTagOptions' => [
                'height' => "500",
            ],
            'wallType' => Videowall::TYPE_CAROUSEL,
            'videos' => [
                [
                    "src" => "/PATH/TO/VIDEO.MP4",
                    "mime" => 'video/mime',
                    "poster" => "/PATH/TO/POSTER.JPG",
                    "title" => "Sweet Sexy Savage",
                ], [
                    "src" => '/PATH/TO/VIDEO.MP4',
                    'poster' => '/PATH/TO/POSTER.JPG',
                    'mime' => 'video/mime',
                    'title' => 'Video 2',
                ],
            ]
        ]);
```

### Usage 2 Thumbnail Mode ###

Thumbnail mode for compact display of the video files along with filter option using the select2 dropdown.

```php
<?php
        use buttflattery\videowall\Videowall;
        echo Videowall::widget([
            'videoTagOptions' => [
                'height' => "500",
            ],
            'wallType' => Videowall::TYPE_THUMB,
            'videos' => [
                [
                    "src" => "/PATH/TO/VIDEO.MP4",
                    "mime" => 'video/mime',
                    "poster" => "/PATH/TO/POSTER.JPG",
                    "title" => "Sweet Sexy Savage",
                ], [
                    "src" => '/PATH/TO/VIDEO.MP4',
                    'poster' => '/PATH/TO/POSTER.JPG',
                    'mime' => 'video/mime',
                    'title' => 'Video 2',
                ],
            ]
        ]);
```

### Usage 3 Playlist Mode ##
Bonus Feature for disaplying th playlists inside the video wall. 

```php 
<?php
        use buttflattery\videowall\Videowall;
        echo Videowall::widget([
            'wallType' => Videowall::TYPE_PLAYLIST,
            'videoTagOptions' => [
                'width' => "800",
                'height' => "600",
            ],
            'playlists' => [
                [
                    'name' => 'Sweet Sexy Savage',
                    'cover' => '/PATH/TO/POSTER.JPG',
                    'videos' => [
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                    ],
                ],
                [
                    'name' => 'Hope',
                    'cover' => '/PATH/TO/POSTER.JPG',
                    'videos' => [
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ],
                        [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ], [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ], [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ], [
                            'src' => '/PATH/TO/VIDEO.MP4',
                            'poster' => '/PATH/TO/POSTER.JPG',
                            'mime' => 'video/mime',
                            'title' => 'Video title',
                        ]],
                ],
            ]
        ]);
```



### Who do I talk to? ###

* buttflattery@hotmail.com
* omeraslam@idowstech.com