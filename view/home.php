<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="view/js/home.js" type="module" defer></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=<?php //echo $_ENV['MAP_API_KEY'] 
                                                                    ?>&callback=initMap" async></script>-->

    <title>ホーム / Spotem</title>
</head>

<body>
    <!-- メニューアイコン&検索窓&タブ -->
    <div class="sticky top-0 w-full bg-white lg:px-64">
        <div class="flex w-full p-4">
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
        <ul id="" class="flex w-full text-center text-sm">
            <li class="flex-grow py-3 border-b-2 border-yellow-600">公式</li>
            <li class="flex-grow py-3 border-b-2 border-gray-200">一般</li>
        </ul>
    </div>
    <!-- 投稿一覧 -->
    <div class="lg:px-64">
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="far fa-heart"></i>
        </div>
        <div class="p-2 border-b border-gray-200">
            <div class="flex items-center p-2">
                <img class="w-10 border border-yellow-600 rounded-full" src="../view/img/user.png" alt="ユーザーアイコン">
                <div class="ml-4 flex-grow">
                    <p class="font-bold">ぎおん徳屋&nbsp;<i class="text-sm fas fa-utensils"></i></p>
                    <p class="text-sm text-gray-600"><span>@</span>gion-tokuya</p>
                </div>
            </div>
            <div>本日は臨時休業です。</div>
            <i class="far fa-heart"></i><i class="fas fa-map-marker-alt"></i>
        </div>
    </div>
    <!-- メニュータブ -->
    <div class="fixed w-full bottom-0 lg:px-64">
        <div id="" class="flex w-full bg-white border-t border-yellow-200">
            <a href="/?home" class="flex-grow flex items-center justify-center">
                <i class="fas fa-home text-xl text-yellow-600"></i>
            </a>
            <a href="/?<?= $_SESSION["userid"] ?>" class="flex-grow flex items-center justify-center py-3">
                <img src="../view/img/user.png" alt="" class="inline-block w-8 rounded-full">
            </a>
            <a href="/?new" class="flex-grow flex items-center justify-center">
                <i class="far fa-edit text-xl"></i>
            </a>
        </div>
    </div>
</body>

</html>