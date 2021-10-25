<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <link rel="stylesheet" href="../view/css/home.css">
    <script src="../view/js/jquery.js"></script>
    <script src="view/js/home.js" type="module" defer></script>
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

        <!--<ul class="flex">
            <li class="w-full text-center cursor-pointer"><span class="inline-block p-3 border-b-2 border-yellow-600">公式</span></li>
            <li class="w-full text-center cursor-pointer"><span class="inline-block p-3">一般</span></li>
        </ul>-->

    <div class="_hometabs" id="top">
        <input id="oficial" type="radio" name="_tab_item" checked>
        <label class="_tab_item" for="oficial"><p>店舗</p></label>

        <input id="user" type="radio" name="_tab_item">
        <label class="_tab_item" for="user"><p>一般</p></label>

 
    <div class="_tab_contents" id="oficial_content">
        <!--↓投稿1件につき-->
        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="show.php">ぎおん徳屋 - 本わらび餅</a> </strong><br>
                <small><span>@</span>gion-tokuya</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">店舗名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">店舗名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">店舗名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">店舗名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">店舗名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>
    </div>

    <!--こっちは一般ユーザー-->
    <div class="_tab_contents" id="user_content">
    <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">ST123456</a> </strong><br>
                <small><span>@</span>st123456</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">ユーザー名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">ユーザー名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>

        <section class="_content ">
            <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
            <div class="columns">
                <div class="column _icon">
                <figure class="is-inline-block">
                <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                </figure>
                </div>
                <div class="column _name">
                <strong><a href="">ユーザー名</a> </strong><br>
                <small>ユーザーID</small>
                </div>
            </div>

            <div class="_textcontent">
                <p>
                    テキスト
                    テキスト
                </p>
            </div>
            
            <div class="_imagecontent">
                <figure class="image is-image is-3by2">
                    <img src="https://bulma.io/images/placeholders/480x320.png">
                </figure>
            </div>
            
            <div class="column _date">
                <small>2021/10/01 12:34</small>
            </div>
            
             <nav class="level is-mobile">
                <div class="level-left">
                    <!--<a class="level-item">
                        <small>位置情報</small>
                        <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                        </a>-->
                    <a class="level-item">
                        <small>いいね</small>
                        <span class="icon is-small"><i class="fas fa-heart"></i></span>
                    </a>
                    <a class="level-item">
                        <small>シェア</small>
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                    </a>
                </div>
            </nav>
        </section>


    </div>
    <!-- 下のTabs footer-->
    <div id="" class="flex w-full bg-white fixed bottom-0 border-t border-gray-200">
        <a href="#top" class="flex-grow flex items-center justify-center">
            <i class="fas fa-home text-xl text-yellow-600"></i>
        </a>
        <!--自分のshowへ飛ぶように変えてください-->
       
        <a href="mypage.php" class="flex-grow flex items-center justify-center py-3">
        <img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full border border-yellow-600">
        </a>
        <a href="new.php" class="flex-grow flex items-center justify-center">
            <i class="far fa-edit text-xl"></i>
        </a>
        <!--<img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        <li class="w-full"><a href="/?search" class="block w-full text-center py-3 bg-yellow-500 text-white"><i class="far fa-search"></i></a></li>
        <li class="w-full"><a href="/?settings" class="block w-full text-center py-3 bg-yellow-50 hover:bg-yellow-100 text-gray-500"><i class="fas fa-user-circle"></i></a></li>
        -->
    </div>
</body>

</html>