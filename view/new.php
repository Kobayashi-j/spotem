<?php include "controller/include/new.php" ?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=<?= $_ENV['MAP_API_KEY'] ?>&libraries=places"></script>
    <script src="../view/js/new.js"></script>

    <title>新規作成</title>
</head>

<body>
    <div class="sticky top-0 bg-white w-full shadow-md">
        <div class="flex">
            <div class="flex-grow-0 px-4 py-3 cursor-pointer"><i class="fas fa-chevron-left"></i></div>
            <div class="flex-grow text-center font-bold py-3">新規投稿</div>
            <div class="flex-grow-0 px-4 py-3 cursor-pointer"><i class="fas fa-ellipsis-h"></i></div>
        </div>
    </div>
    <!--
    <div class="p-3">
        <p class="text-lg"><i class="fas fa-map-marker-alt"></i>&nbsp;アカウント・場所</p>
        <input type="text" name="place" placeholder="どこで？" class="w-full bg-transparent outline-none border-b border-gray-400" />
        <div class="j-autocomplete">
        </div>
    </div>
    -->
    <div class="pt-20 lg:px-64 px-4">
        <form action="/?new=2" method="post">
            <input type="hidden" name="place_id">
            <input type="hidden" name="place">
            <div class="flex bg-gray-50 border border-gray-200 rounded-md mb-2">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-map-marker-alt text-gray-500"></i>
                </span>
                <input type="text" name="keyword" placeholder="場所を検索" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= isset($_POST["place"]) ? $_POST["place"] : '' ?>" required />
            </div>
            <ul class="j-autocomplete border rounded-md border-gray-200 cursor-pointer hidden">
            </ul>
            <input type="button" value="次へ" class="mt-4 mb-20 py-2 px-4 bg-gray-400 text-white border border-gray-200 rounded-2xl float-right j-submit" disabled onclick="submit();" />
        </form>
    </div>

    </div>
    <!-- Tabs -->
    <div class="fixed w-full bg-white bottom-0 border-t-2">
        <div class="flex w-full">
            <a href="/?home" class="flex-1 text-center py-2">
                <i class="fas fa-home text-gray-600 text-xl"></i>
            </a>
            <a href="/?<?= $_SESSION["userid"] ?>" class="flex-1 text-center py-2">
                <i class="fas fa-user text-gray-600 text-xl"></i>
            </a>
            <a href="" class="flex-1 text-center py-2">
                <i class="fas fa-bookmark text-gray-600 text-lg"></i>
            </a>
            <a href="/?new" class="flex-1 text-center py-2">
                <i class="fas fa-edit text-green-400 text-xl"></i>
            </a>
        </div>
    </div>
</body>

</html>