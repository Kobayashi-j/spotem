<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/login.js" type="module" defer></script>

    <title>ログイン / Spotem</title>
</head>

<body>
    <div class="sticky top-0 bg-white w-full shadow-md">
        <div class="flex">
            <a href="/?top" class="flex-grow-0 px-4 py-3"><i class="fas fa-chevron-left"></i></a>
            <div class="flex-grow text-center font-bold py-3"></div>
            <div class="flex-grow-0 px-4 py-3 cursor-pointer"></div>
        </div>
    </div>
    <div class="pt-20 px-8">
        <p class="text-3xl text-center pb-10 font-serif"><a href="/">Spotem</a></p>
        <form action="/controller/sync/login.php" method="post">
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md mb-2">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-at text-gray-500"></i>
                </span>
                <input type="text" name="unique" placeholder="ユーザーIDまたはメール" class="w-full py-2 pr-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= $_GET["login"] ?>" required />
            </div>
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-lock text-gray-500"></i>
                </span>
                <input type="password" name="password" placeholder="パスワード（8文字以上の半角英数）" class="w-full py-2 pr-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" required />
            </div>
            <div class="text-right mt-3">
                <a href="" class="text-blue-900 text-sm">パスワードを忘れた場合</a>
            </div>
            <button type="submit" class="font-normal w-full my-6 py-1 bg-green-400 rounded-md">ログイン</button>
        </form>
        <div class="text-xs text-gray-400 text-right">
            アカウントをお持ちでないですか？<a href="/?signup" class="text-blue-900">登録する</a>
        </div>
    </div>
    <footer class="fixed bottom-0 w-full">
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>

</html>