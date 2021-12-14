<?php include "controller/include/apply.php" ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=<?= $_ENV['MAP_API_KEY'] ?>&libraries=places"></script>
    <script src="../view/js/apply.js" type="module" defer></script>

    <title>申請 / Spotem</title>
</head>

<body>
    <div class="border-b border-gray-200 text-center py-3 font-bold">
        公式申請
    </div>
    <!--php:$_SERVER['HTTP_REFERER']実装-->
    <a href="/?home" class="absolute top-0 p-3">
        <i class="fas fa-chevron-left"></i>
    </a>
    <div class="pt-10 px-4">
        <form action="/?starbucks_kyotoPorta" method="post">
            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2">営業許可証</p>
            <hr class="border-yellow-900 my-2">
            <div id="Preview" class="px-2 pt-2">
                <img src="../view/img/eigyo_kyokasyo_sample.jpg" alt="" class="h-64">
            </div>

            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2 mt-6">店舗情報</p>
            <hr class="border-yellow-900 my-2">
            <p class="m-2 font-bold">店舗名</p>
            <p class="m-2">スターバックスコーヒー京都Porta店</p>
            <p class="m-2 font-bold">電話番号</p>
            <p class="m-2">TEL:075-343-2377</p>
            
            <p class="m-2 font-bold">住所</p>
            <!-- \d{3}-\d{4} -->
            <p class="m-2">〒600-8216</p>
            <p class="m-2">京都府京都市下京区烏丸通塩小路下ル東塩小路町902</p>
            <p class="m-2 font-bold">店舗の種類</p>
            <p class="m-2">カフェ</p>
            <p class="text-lg font-bold border-l-8 border-yellow-900 pl-2 mt-6">Google Mapとの連携</p>
            ...
            <input type="submit" class="w-full my-6 py-1 bg-yellow-300 rounded-md" value="申請する" />
        </form>
    </div>
    <footer>
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>

</html>