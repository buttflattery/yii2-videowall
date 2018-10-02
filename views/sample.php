<?php

use buttflattery\videowall\Videowall;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="row clearfix">
    <div class="col-sm-8">

        <?php
echo Videowall::widget(
    [
        'options' => [
            'class' => 'custom',
            'width' => "500",
            'height' => "500",
            'setupOptions' => [
                'controls' => true,
                'autoplay' => false,
                'preload' => 'auto',
            ],
            'poster' => "/video-uploads/posters/1.jpg",
        ],
        'onBeforeNext' => 'function(event,dataObj){console.log(event);}',
        'wallType' => Videowall::TYPE_THUMB,
        'videos' => [
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
        ],
    ]);
?>

    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-8">

        <?php
echo Videowall::widget(
    [
        'options' => [
            'class' => 'custom',
            'width' => "500",
            'height' => "500",
            'setupOptions' => [
                'controls' => true,
                'autoplay' => false,
                'preload' => 'auto',
            ],
            'poster' => "/video-uploads/posters/1.jpg",
        ],
        'onBeforeNext' => 'function(event,dataObj){console.log(event);}',
        'wallType' => Videowall::TYPE_CAROUSEL,
        'videos' => [
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
            [
                "src" => "/video-uploads/jaan-jatti.mp4",
                "mime" => 'video/mp4',
                "poster" => "/video-uploads/posters/playlist-1.jpg",
                "title" => "Sweet Sexy Savage",
            ], [
                "src" => '/video-uploads/mera-jehan.mp4',
                'poster' => '/video-uploads/posters/2.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 2',
            ], [
                'src' => '/video-uploads/mitran-de-boot.mp4',
                'poster' => '/video-uploads/posters/3.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 3',
            ], [
                'src' => '/video-uploads/mutiyar.mp4',
                'poster' => '/video-uploads/posters/4.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 4',
            ], [
                'src' => '/video-uploads/raashi-sood.mp4',
                'poster' => '/video-uploads/posters/5.jpg',
                'mime' => 'video/mp4',
                'title' => 'Video 5',
            ],
        ],
    ]);
?>

    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-8">

        <?php
echo Videowall::widget(
    [
        'options' => [
            'class' => 'custom',
            'width' => "500",
            'height' => "500",
            'setupOptions' => [
                'controls' => true,
                'autoplay' => false,
                'preload' => 'auto',
            ],
            'poster' => "/video-uploads/posters/1.jpg",
        ],
        'wallType' => Videowall::TYPE_PLAYLIST,
        'playlists' => [[
            'name' => 'Sweet Sexy Savage',
            'cover' => '/video-uploads/posters/playlist-1.jpg',
            'videos' => [
                [
                    'src' => '/video-uploads/sample1.mp4',
                    'poster' => '/video-uploads/posters/sample1.png',
                    'mime' => 'video/mp4',
                    'title' => 'Circus Juggler Video',
                ],
                [
                    'src' => '/video-uploads/sample2.mp4',
                    'poster' => '/video-uploads/posters/sample2.png',
                    'mime' => 'video/mp4',
                    'title' => 'Deep Space Star Acts',
                ],
                [
                    'src' => '/video-uploads/sample3.mp4',
                    'poster' => '/video-uploads/posters/sample3.png',
                    'mime' => 'video/mp4',
                    'title' => 'Dolby Digital Intro',
                ],
                [
                    'src' => '/video-uploads/sample4.mp4',
                    'poster' => '/video-uploads/posters/sample4.png',
                    'mime' => 'video/mp4',
                    'title' => 'Toy Helicopter Demo',
                ],
            ],
        ], [
            'name' => 'Hope',
            'cover' => '/video-uploads/posters/playlist-2.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Beetles',
            'cover' => '/video-uploads/posters/playlist-3.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Json Derulo',
            'cover' => '/video-uploads/posters/playlist-4.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Taylor Swift (REPUTATION)',
            'cover' => '/video-uploads/posters/playlist-5.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'The Best Album Covers of 2016 - Fuse',
            'cover' => '/video-uploads/posters/playlist-6.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Kanye West',
            'cover' => '/video-uploads/posters/playlist-7.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Taylor Swift (SPEAK NOW)',
            'cover' => '/video-uploads/posters/playlist-8.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'Blue Rock Orchestra',
            'cover' => '/video-uploads/posters/playlist-9.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ], [
            'name' => 'EMINEM: The Marshal Mathers',
            'cover' => '/video-uploads/posters/playlist-10.jpg',
            'videos' => [[
                'src' => '/video-uploads/sample1.mp4',
                'poster' => '/video-uploads/posters/sample1.png',
                'mime' => 'video/mp4',
                'title' => 'Circus Juggler Video',
            ], [
                'src' => '/video-uploads/sample2.mp4',
                'poster' => '/video-uploads/posters/sample2.png',
                'mime' => 'video/mp4',
                'title' => 'Deep Space Star Acts',
            ], [
                'src' => '/video-uploads/sample3.mp4',
                'poster' => '/video-uploads/posters/sample3.png',
                'mime' => 'video/mp4',
                'title' => 'Dolby Digital Intro',
            ], [
                'src' => '/video-uploads/sample4.mp4',
                'poster' => '/video-uploads/posters/sample4.png',
                'mime' => 'video/mp4',
                'title' => 'Toy Helicopter Demo',
            ]],
        ]],
    ]);
?>

    </div>
</div>