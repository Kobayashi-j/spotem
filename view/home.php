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
    <div class="sticky top-0 bg-white w-full shadow-md">
        <div class="flex">
            <div class="flex-grow-0 px-4 py-3 cursor-pointer j-hamburger"><i class="fas fa-sliders-h"></i></div>
            <div class="flex-grow text-center font-bold pr-2  py-2">
                <div class="flex flex-grow h-full bg-gray-100 rounded-full">
                    <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                        <i class="fas fa-search text-gray-500"></i>
                    </span>
                    <input type="text" placeholder="検索" class="w-full rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" />
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-screen z-30 top-0 fixed bg-opacity-80 bg-white overflow-hidden hidden j-menu-bg">
        <div class="h-screen bg-white border-r-2 transition duration-1000 overflow-hidden j-menu" style="width: 0;">
            <a href="/controller/sync/logout.php">ログアウト</a>
        </div>
    </div>
    <!-- 投稿一覧 -->
    <div class="">
        <div class="p-4 shadow-sm">
            <div class="flex py-1">
                <div class="flex-grow-0">
                    <div class="w-10 border-2 border-green-400 rounded-full">
                        <img class="w-10 border border-white rounded-full" src="../view/img/kyotoporta.png" alt="ユーザーアイコン">
                    </div>
                </div>
                <div class="flex-grow pl-2 pt-0.5">
                    <p class="text-sm">st071959</p>
                    <p class="text-gray-400 text-xs">@st071959</p>
                </div>
                <div class="flex-grow-0 px-4 py-2 cursor-pointer"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="text-sm p-1">また行きたいなああああああああああああああああああああああああああああああああああああああああ</div>
            <!-- imageの無いものには生成しない -->
            <div class="p-1 hidden">
                <!-- image -->
            </div>
            <div class="p-1 flex text-xs text-gray-600">
                <!-- place -->
                <div class="w-2/5 truncate"><i class="fas fa-clock"></i><span class="pl-1.5">12月09日 09:00</span></div>
                <div class="w-2/5 truncate"><i class="fas fa-map-marker-alt"></i><span class="pl-1.5">龍泉閣dddddddddddd</span></div>
                <div class="w-1/5"><i class="fas fa-heart"></i><span class="pl-1.5">12K</span></div>
            </div>
        </div>
        <div class="p-4 shadow-sm">
            <div class="flex py-1">
                <div class="flex-grow-0">
                    <div class="w-10 border-2 border-green-400 rounded-full">
                        <img class="w-10 border border-white rounded-full" src="../view/img/kyotoporta.png" alt="ユーザーアイコン">
                    </div>
                </div>
                <div class="flex-grow pl-2 pt-0.5">
                    <p class="text-sm">st071959</p>
                    <p class="text-gray-400 text-xs">@st071959</p>
                </div>
                <div class="flex-grow-0 px-4 py-2"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="text-sm p-1">また行きたいなああああああああああああああああああああああああああああああああああああああああ</div>
            <!-- imageの無いものには生成しない -->
            <div class="p-1 hidden">
                <!-- image -->
            </div>
            <div class="p-1 flex text-xs text-gray-600">
                <!-- place -->
                <div class="w-2/5 truncate"><i class="fas fa-clock"></i><span class="pl-1.5">12月09日 09:00</span></div>
                <div class="w-2/5 truncate"><i class="fas fa-map-marker-alt"></i><span class="pl-1.5">龍泉閣dddddddddddd</span></div>
                <div class="w-1/5"><i class="fas fa-heart"></i><span class="pl-1.5">12K</span></div>
            </div>
        </div>
        <div class="p-4 shadow-sm">
            <div class="flex py-1">
                <div class="flex-grow-0">
                    <div class="w-10 border-2 border-green-400 rounded-full">
                        <img class="w-10 border border-white rounded-full" src="../view/img/kyotoporta.png" alt="ユーザーアイコン">
                    </div>
                </div>
                <div class="flex-grow pl-2 pt-0.5">
                    <p class="text-sm">st071959</p>
                    <p class="text-gray-400 text-xs">@st071959</p>
                </div>
                <div class="flex-grow-0 px-4 py-2"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="text-sm p-1">また行きたいなああああああああああああああああああああああああああああああああああああああああ</div>
            <!-- imageの無いものには生成しない -->
            <div class="p-1 hidden">
                <!-- image -->
            </div>
            <div class="p-1 flex text-xs text-gray-600">
                <!-- place -->
                <div class="w-2/5 truncate"><i class="fas fa-clock"></i><span class="pl-1.5">12月09日 09:00</span></div>
                <div class="w-2/5 truncate"><i class="fas fa-map-marker-alt"></i><span class="pl-1.5">龍泉閣dddddddddddd</span></div>
                <div class="w-1/5"><i class="fas fa-heart"></i><span class="pl-1.5">12K</span></div>
            </div>
        </div>
        <div class="p-4 shadow-sm">
            <div class="flex py-1">
                <div class="flex-grow-0">
                    <div class="w-10 border-2 border-green-400 rounded-full">
                        <img class="w-10 border border-white rounded-full" src="../view/img/kyotoporta.png" alt="ユーザーアイコン">
                    </div>
                </div>
                <div class="flex-grow pl-2 pt-0.5">
                    <p class="text-sm">st071959</p>
                    <p class="text-gray-400 text-xs">@st071959</p>
                </div>
                <div class="flex-grow-0 px-4 py-2"><i class="fas fa-ellipsis-v"></i></div>
            </div>
            <div class="text-sm p-1">また行きたいなああああああああああああああああああああああああああああああああああああああああ</div>
            <!-- imageの無いものには生成しない -->
            <div class="p-1 hidden">
                <!-- image -->
            </div>
            <div class="p-1 flex text-xs text-gray-600">
                <!-- place -->
                <div class="w-2/5 truncate"><i class="fas fa-clock"></i><span class="pl-1.5">12月09日 09:00</span></div>
                <div class="w-2/5 truncate"><i class="fas fa-map-marker-alt"></i><span class="pl-1.5">龍泉閣dddddddddddd</span></div>
                <div class="w-1/5"><i class="fas fa-heart"></i><span class="pl-1.5">12K</span></div>
            </div>
        </div>
    </div>
    <!-- メニュータブ -->
    <div class="fixed w-full bg-white bottom-0 border-t-2">
        <div class="flex w-full">
            <a href="/?home" class="flex-1 text-center py-2">
                <i class="fas fa-home text-green-400 text-xl"></i>
            </a>
            <a href="/?<?= $_SESSION["userid"] ?>" class="flex-1 text-center py-2">
                <i class="fas fa-user text-gray-600 text-xl"></i>
            </a>
            <a href="" class="flex-1 text-center py-2">
                <i class="fas fa-bookmark text-gray-600 text-lg"></i>
            </a>
            <a href="/?new" class="flex-1 text-center py-2">
                <i class="fas fa-edit text-gray-600 text-xl"></i>
            </a>
        </div>
    </div>
</body>

</html>