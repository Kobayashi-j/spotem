<!--ゲスト側マイページ-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/show.js" defer></script>

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
        <!--一般ユーザーのページ-->
        <div class="_profile">
            <div class="_square"></div>

            <img class="_usericon" src="../view/img/cafe.png" alt="ユーザーアイコン">
            <button class="_followbutton" type="submit">フォロー</button>
            <p class="_username">naotoge5</p>
            <div class="_profilebox">
                <p class="_profiletext">滋賀県在住のnaotoge5です。<br>よろしくお願いします。</p>
            </div>
        </div>

        <div class="_profiletabs _twotabs">
            <input id="post" type="radio" name="_tab_item" checked>
            <label class="_tab_item" for="post">投稿</label>

            <input id="like" type="radio" name="_tab_item">
            <label class="_tab_item" for="like">いいね</label>

            <div class="_tab_content" id="post_content">
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
            <div class="_tab_content" id="like_content">
                いいねした投稿を一覧表示
            </div>
        </div>

    <?php else : ?>
        <div class="lg:px-64">
            <!--全体-->
            <div class="flex p-4 items-center">
                <img class="w-20 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p>ぎおん徳屋 - 本わらび餅</p>
                    <p class="text-sm text-gray-600 mb-1"><span>@</span>gion-tokuya</p>
                    <button class="w-3/4 lg:w-1/2 border border-yellow-600 rounded-3xl" type="button">フォロー</button>
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
                            <td class="w-1/3">123</td>
                            <td>21</td>
                            <td>20</td>
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
                <table class="w-full table-auto text-sm text-left">
                    <!--店舗情報 - 変更不可［営業時間は除く］（申請が必要）-->
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
            </div>
            <div class="px-4 text-xs">
                芸妓さんや舞妓さんが行きかう祇園南、花見小路。紅殻格子に犬矢来の情緒溢れる街並みに佇む甘味処が「ぎおん徳屋」です。「ぎおん徳屋」が何よりも大切にしているのが素材の質。ふっくらと丁寧に炊き上げた大粒の丹波産大納言小豆を使ったぜんざいにおしるこ、国産の本わらび粉と和三盆糖で作るとろりとした食感のわらび餅。贅沢な素材そのものの持ち味を引き出すように工夫が重ねられたこだわりの甘味は、あっさりとした上品な味わい。専用のコンロを使って自分でお餅を焼くことができるのも好評で、いつもたくさんのお客さんで賑わっています。
            </div>
        </div>
        <!--
        <div class="_profiletabs">
            <input id="post" type="radio" name="_tab_item" checked>
            <label class="_tab_item" for="post">投稿</label>

            <input id="coupon" type="radio" name="_tab_item">
            <label class="_tab_item" for="coupon">キャンペーン</label>

            <input id="photo" type="radio" name="_tab_item">
            <label class="_tab_item" for="photo">写真</label>

            <div class="_tab_content" id="post_content">
                投稿を一覧表示
            </div>
            <div class="_tab_content" id="coupon_content">
                フェア・クーポンを一覧表示
                <table class="_tabtable">
                    <p>フェア情報</p>
                    <tr>
                        <th>内容</th>
                        <td>期間限定商品AA</td>
                    </tr>
                    <tr>
                        <th>期間</th>
                        <td>2022年 1月1日~1月31日</td>
                    </tr>
                </table>

                <table class="_tabtable">
                    <p>クーポン</p>
                    <tr>
                        <th>内容</th>
                        <td>AAセット200円OFF</td>
                    </tr>
                    <tr>
                        <th>期間</th>
                        <td>2022年 1月1日~1月31日</td>
                    </tr>
                    <tr>
                        <th>利用条件</th>
                        <td>14:00までにご来店のお客様限定です</td>
                    </tr>
                </table>

            </div>

            <div class="_tab_content" id="info_content">
                店舗情報を一覧表示
            </div>
            <div class="_tab_content" id="photo_content">
                写真を一覧表示
            </div>
        </div>-->
    <?php endif; ?>
    <!-- Tabs -->
    <div id="" class="flex w-full bg-white fixed bottom-0 border-t border-gray-200">
        <a href="/?home" class="flex-grow flex items-center justify-center">
            <i class="far fa-home text-xl"></i>
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