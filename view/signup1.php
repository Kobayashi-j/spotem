<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/signup1.js" type="module" defer></script>

    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="sticky top-0 bg-white w-full shadow-md">
        <div class="flex">
            <a href="/?top" class="flex-grow-0 px-4 py-3"><i class="fas fa-chevron-left"></i></a>
            <div class="flex-grow text-center font-bold py-3">新規登録</div>
            <div class="flex-grow-0 px-4 py-3"><i class="fas fa-chevron-right invisible"></i></div>
        </div>
    </div>
    <div class="pt-20 px-4">
        <p class="text-3xl text-center pb-10 font-serif"><a href="/">Spotem</a></p>
        <form action="/?signup=2" method="post">
            <p class="text-xs text-red-500 j-userid-help ml-2 mb-1"></p>
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md mb-2">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-at text-gray-500"></i>
                </span>
                <input type="text" name="userid" placeholder="ユーザーID" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= isset($_POST["userid"]) ? $_POST["userid"] : '' ?>" required />
                <span class="px-3 flex items-center invisible j-userid-check">
                    <i class="fas fa-check text-gray-500"></i>
                </span>
            </div>
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-user text-gray-500"></i>
                </span>
                <input type="text" name="name" placeholder="名前" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= isset($_POST["name"]) ? $_POST["name"] : '' ?>" required />
                <span class="px-3 flex items-center invisible j-name-check">
                    <i class="fas fa-check text-gray-500"></i>
                </span>
            </div>
            <input type="button" class="w-full my-6 py-1 bg-green-400 rounded-md cursor-not-allowed j-submit" value="次へ" disabled onclick="submit();" />
        </form>
        <div class="text-xs text-gray-400 text-right mt-2">
            企業の方は<a href="/" class="text-blue-900">こちら</a>
        </div>
    </div>
    <footer class="fixed bottom-0 w-full">
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>

</html>