<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'links' => [
            [
                'text' => "characters",
            ],

            [
                'text' => "comics",
            ],

            [
                'text' => "movies",
            ],

            [
                'text' => "tv",
            ],

            [
                'text' => "games",
            ],

            [
                'text' => "collectibles",
            ],

            [
                'text' => "video",
            ],

            [
                'text' => "fans",
            ],

            [
                'text' => "news",
            ],

            [
                'text' => "shop",
            ],
        ],
        'comics' => config('comics'),
        'navigationList' => [
            [
                'category' => "DC Comics",
                'links' => [
                    [
                        'text' => "Characters",
                    ],

                    [
                        'text' => "Comics",
                    ],

                    [
                        'text' => "Movies",
                    ],

                    [
                        'text' => "TV",
                    ],

                    [
                        'text' => "Games",
                    ],

                    [
                        'text' => "Videos",
                    ],

                    [
                        'text' => "News",
                    ],
                ],
            ],

            [
                'category' => "Shop",
                'links' => [
                    [
                        'text' => "Shop DC",
                    ],

                    [
                        'text' => "Shop DC Collectibles",
                    ],
                ],
            ],

            [
                'category' => "DC",
                'links' => [
                    [
                        'text' => "Terms Of Use",
                    ],

                    [
                        'text' => "Privacy policy (New)",
                    ],

                    [
                        'text' => "Ad Choices",
                    ],

                    [
                        'text' => "Advertising",
                    ],

                    [
                        'text' => "Jobs",
                    ],

                    [
                        'text' => "Subscriptions",
                    ],

                    [
                        'text' => "Talent Workshops",
                    ],

                    [
                        'text' => "CPSC Certificates",
                    ],

                    [
                        'text' => "Ratings",
                    ],

                    [
                        'text' => "Shop Help",
                    ],

                    [
                        'text' => "Contact Us",
                    ],
                ],
            ],

            [
                'category' => "Sites",
                'links' => [
                    [
                        'text' => "DC",
                    ],

                    [
                        'text' => "MAD Magazine",
                    ],

                    [
                        'text' => "DC  Kids",
                    ],

                    [
                        'text' => "DC Universe",
                    ],

                    [
                        'text' => "DC Power Visa",
                    ],
                ],
            ],
        ],

        'socials' => [
            [
                'nome' => "Facebook",
                'img' => asset('img/footer-facebook.png'),
            ],

            [
                'nome' => "Twitter",
                'img' => asset('img/footer-twitter.png'),
            ],

            [
                'nome' => "Youtube",
                'img' => asset('img/footer-youtube.png'),
            ],

            [
                'nome' => "Pinterest",
                'img' => asset('img/footer-pinterest.png'),
            ],

            [
                'nome' => "Periscope",
                'img' => asset('img/footer-periscope.png'),
            ],
        ],

        'sections' => [
            [
                'text' => "Digital comics",
                'img' =>  asset('img/buy-comics-digital-comics.png'),
            ],

            [
                'text' => "dc merchandise",
                'img' =>   asset('img/buy-comics-merchandise.png'),
            ],

            [
                'text' => "subscription",
                'img' =>   asset('img/buy-comics-subscriptions.png'),
            ],

            [
                'text' => "comic shop locator",
                'img' =>   asset('img/buy-comics-shop-locator.png'),
            ],

            [
                'text' => "dc power visa",
                'img' =>   asset('img/buy-dc-power-visa.svg'),
            ],
        ],
    ];
    return view('/home', $data);
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
