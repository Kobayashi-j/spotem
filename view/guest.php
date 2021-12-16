<!DOCTYPE html>
<html lang="ja" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/show.js" type="module" defer></script>
    <script src="../view/js/tab.js" type="module" defer></script>

    <title>Spotem / @<?= $route ?></title>
</head>

<body>
    <?php include "controller/include/show.php" ?>
    <div class="sticky top-0 bg-white w-full shadow-md">
        <div class="flex">
            <div class="flex-grow-0 px-4 py-3 cursor-pointer"><i class="fas fa-sliders-h"></i></div>
            <div class="flex-grow text-center font-bold py-3"><a href="" class="cursor-pointer"><?= $route ?></a></div>
            <div class="flex-grow-0 px-4 py-3 cursor-pointer"><i class="fas fa-ellipsis-h"></i></div>
        </div>
    </div>
    <div>
        <div class="w-16 min-w-max border-2 border-green-400 mx-auto my-4 rounded-full">
            <img class="w-16 h-16 border border-white rounded-full" src="<?= $account["image"] ?>" onerror="this.src='../view/img/user.png';" alt="ユーザーアイコン">
        </div>
        <?php if ($account) : ?>
            <p class="text-center font-bold"><?= $account["name"] ?></p>
            <p class="text-center text-sm text-gray-400">@<?= $account["id"] ?></p>
            <table class="w-full table-fixed my-3">
                <tr>
                    <th>213</th>
                    <th>10K</th>
                    <th>325</th>
                </tr>
                <tr class="text-center text-xs text-gray-600">
                    <td>件</td>
                    <td>フォロワー</td>
                    <td>フォロー</td>
                </tr>
            </table>
            <div class="text-center my-3">
                <button class="bg-green-400 w-2/5 py-1 rounded-full text-white">フォロー</button>
            </div>
        <?php else : ?>
            <p class="text-center font-bold">ユーザが存在しません</p>
        <?php endif; ?>
    </div>
    <div class="flex text-center text-sm">
        <div class="flex-1 py-2 cursor-pointer border-b-2 border-black font-bold">投稿</div><!-- 選択済 -->
        <div class="flex-1 py-2 cursor-pointer border-b-2 text-gray-600">メニュー</div>
        <div class="flex-1 py-2 cursor-pointer border-b-2 text-gray-600">アクセス</div>
    </div>
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
    <div class="py-4">&nbsp;</div>
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
<!-- @:gray-400 -->