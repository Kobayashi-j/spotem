<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="view/js/search.js" defer></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=<?php //echo $_ENV['MAP_API_KEY'] 
                                                                    ?>&callback=initMap" async></script>-->

    <title>ホーム / Spotem</title>
</head>

<body>
    <div class="sticky top-0 w-full bg-white border-b border-gray-200">
        <div class="flex w-full p-3">
            <div class="flex items-center justify-center mr-2">
                <i class="fas fa-sliders-h text-gray-700 text-2xl p-1"></i>
            </div>
            <div class="flex flex-grow ml-2 bg-gray-100 rounded-full">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-search text-gray-500"></i>
                </span>
                <input type="text" placeholder="検索" class="w-full rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" />
            </div>
            <!--<input type="text" class="border border-yellow-600 rounded-full flex-auto m-2" placeholder="キーワード検索">-->
        </div>
        <ul class="flex">
            <li class="w-full text-center cursor-pointer"><span class="inline-block p-3 border-b-2 border-yellow-600">公式</span></li>
            <li class="w-full text-center cursor-pointer"><span class="inline-block p-3">一般</span></li>
        </ul>
    </div>
    <div>
        <section class="tab-content">
            <div class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p><strong>ジョウ</strong><br>
                            こんにちは
                        </p>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item">
                                    <small>位置情報</small>
                                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                                </a>
                                <a class="level-item">
                                    <small>いいね</small>
                                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                                </a>
                                <a class="level-item">
                                    <small>シェア</small><br>
                                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        投稿を一覧表示
        <br>
        縦<br>
        ス<br>
        ク<br>
        ロ<br>
        ｜<br>
        ル<br>
        し<br>
        ま<br>
        す<br>
        。<br>
        1<br>
        2<br>
        3<br>
        4<br>
        5<br>
        6<br>
        7<br>
        8<br>
        9<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        end
    </div>
    <!-- Tabs -->
    <div id="" class="flex w-full bg-white fixed bottom-0 border-t border-gray-200">
        <a href="/?home" class="flex-grow flex items-center justify-center">
            <i class="far fa-home text-lg text-yellow-600"></i>
        </a>
        <a href="/?naotoge5" class="flex-grow flex items-center justify-center py-2">
            <img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        </a>
        <a href="/?new" class="flex-grow flex items-center justify-center">
            <i class="far fa-edit text-lg"></i>
        </a>
        <!--<img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        <li class="w-full"><a href="/?search" class="block w-full text-center py-3 bg-yellow-500 text-white"><i class="far fa-search"></i></a></li>
        <li class="w-full"><a href="/?settings" class="block w-full text-center py-3 bg-yellow-50 hover:bg-yellow-100 text-gray-500"><i class="fas fa-user-circle"></i></a></li>
        -->
    </div>
</body>

</html>