<!--他人のプロフ-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/show.css">
    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/show.js" type="module" defer></script>

    <title>Spotem / @<?= $route ?></title>
</head>

<body>
    <!--
    <div class="bg-yellow-600 py-5">
        &nbsp;
    </div>
    -->
    <div class="border-b border-gray-200">
        <!--php:$_SERVER['HTTP_REFERER']実装-->
        <a href="/?home" class="inline-block p-3">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    <?php if (false) : ?>

    <?php else : ?>
        <div class="lg:px-64">
            <!--全体-->
            <div class="flex p-4 items-center">
                <img class="w-20 border border-yellow-600 rounded-full" src="../view/img/naotoge5.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p>ST111111</p>
                    <p class="text-sm text-gray-600 mb-1"><span>@</span>st111111</p>
                    <button class="w-3/4 lg:w-1/2 border border-yellow-600 rounded-3xl" type="button">プロフィールを編集</button>
                </div>
            </div>
            <div class="px-4">
                <table class="w-full table-fixed text-xs text-center">
                    <thead>
                        <tr class="text-gray-600">
                            <td class="w-1/3">投稿</td>
                            <td>フォロワー</td>
                            <td>フォロー中</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-1/3">10</td>
                            <td>11</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="text-gray-600">
                            <td class="w-1/3">件</td>
                            <td>人</td>
                            <td>人</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="p-4">
                <!--
                    <table class="w-full table-auto text-sm text-left">
                    店舗情報 - 変更不可［営業時間は除く］（申請が必要）
                    <thead>
                        <tr>
                            <th>ぎおん徳屋</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>&#12306;&nbsp;</span>605-0074</td>
                        </tr>
                        <tr>
                            <td>京都府京都市東山区祇園町南側570-127</td>
                        </tr>
                        <tr>
                            <td><span>TEL&nbsp;</span><a href="tel:" class="underline text-blue-900">075-561-5554</a></td>
                        </tr>
                        <tr>
                            <td><span>営業時間&nbsp;</span>12:00 - 18:00</td>
                        </tr>
                    </tbody>
                </table>
                -->
            </div>
            <div class="px-4 text-xs">
                カメラと食べ歩きが趣味です！
            </div>
        </div>
        <!--タブを追加する方式にするかどうか-->
        <div class="_profiletabs _twotabs">
            <input id="post" type="radio" name="_tab_item" checked>
            <label class="_tab_item" for="post">投稿</label>

            <input id="like" type="radio" name="_tab_item">
            <label class="_tab_item" for="like">いいね</label>

            <div class="_tab_content" id="post_content">
                <section class="_content ">
                    <!--なぜかculumnが横並びにならない　あきらめてcssで指定-->
                    <div class="columns">
                        <div class="column _icon">
                        <figure class="is-inline-block">
                        <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/naotoge5.png" alt="ユーザーアイコン">
                        </figure>
                        </div>
                        <div class="column _name">
                        <strong><a href="">ST111111</a> </strong><br>
                        <small><span>@</span>st111111</small>
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
                        <img class="w-11 border border-yellow-600 rounded-full" src="../view/img/naotoge5.png" alt="ユーザーアイコン">
                        </figure>
                        </div>
                        <div class="column _name">
                        <strong><a href="">ST111111</a> </strong><br>
                        <small><span>@</span>st111111</small>
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
            <div class="_tab_content" id="like_content">
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

            </div>
        </div>

       
        
    <?php endif; ?>
    <!-- Tabs -->
    <div id="" class="flex w-full bg-white fixed bottom-0 border-t border-gray-200">
        <a href="home.php" class="flex-grow flex items-center justify-center">
            <i class="fas fa-home text-xl"></i>
        </a>
        <a href="/?<?= $_SESSION["userid"] ?>" class="flex-grow flex items-center justify-center py-3">
            <img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full border border-yellow-600">
        </a>
        <a href="/?new" class="flex-grow flex items-center justify-center">
            <i class="far fa-edit text-xl"></i>
        </a>
        <!--<img src="../view/img/naotoge5.png" alt="" class="inline-block w-8 rounded-full">
        <li class="w-full"><a href="/?search" class="block w-full text-center py-3 bg-yellow-500 text-white"><i class="far fa-search"></i></a></li>
        <li class="w-full"><a href="/?settings" class="block w-full text-center py-3 bg-yellow-50 hover:bg-yellow-100 text-gray-500"><i class="fas fa-user-circle"></i></a></li>
        -->
    </div>
</body>

</html>