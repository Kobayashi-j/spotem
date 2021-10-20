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
    <div class="border-b border-gray-200">
        <!--php:$_SERVER['HTTP_REFERER']実装-->
        <a href="/" class="inline-block p-3">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    <div class="pt-20 px-8">
        <p class="text-3xl text-center pb-10 font-serif"><a href="/">Spotem</a></p>
        <form action="/controller/sync/login.php" method="post">
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md mb-2">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-at text-gray-500"></i>
                </span>
                <input type="text" name="unique" placeholder="ユーザーIDまたはメール" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" value="<?= $_GET["login"] ?>" required />
            </div>
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-lock text-gray-500"></i>
                </span>
                <input type="password" name="password" placeholder="パスワード（8文字以上の半角英数）" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" required />
            </div>
            <div class="text-right mt-3">
                <a href="" class="text-blue-900 text-sm">パスワードを忘れた場合</a>
            </div>
            <button type="submit" class="w-full my-6 py-1 bg-yellow-400 rounded-md">ログイン</button>
        </form>
        <div class="text-xs text-gray-400 text-right">
            アカウントをお持ちでないですか？<a href="/?signup" class="text-blue-900">登録する</a>
        </div>
    </div>
    <!--
        <form action="controller/auth.php" method="post">
            <div class="field mb-5">
                <div class="control has-icons-left">
                    <input class="input is-medium is-rounded" type="text" name="unique" placeholder="ユーザーIDまたはメール" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-at"></i>
                    </span>
                </div>
            </div>
            <div class="field mb-5">
                <div class="control has-icons-left">
                    <input class="input is-medium is-rounded" type="password" name="password" placeholder="パスワード（8文字以上の半角英数）" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
            </div>
            <button class="input button is-rounded is-success" type="submit">ログイン</button>
        </form>
    </div>-->
    <footer class="fixed bottom-0 w-full">
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>

</html>