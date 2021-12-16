<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/css/all.min.css">
    <link rel="stylesheet" href="../view/css/tailwind.css">
    <script src="../view/js/jquery.js"></script>
    <script src="../view/js/signup3.js" type="module" defer></script>

    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="sticky top-0 bg-white w-full shadow-md">
        <form action="/?signup=2" method="post">
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <input type="hidden" name="email" value="<?= $_POST["email"] ?>">
            <input type="hidden" name="password" value="<?= $_POST["password"] ?>">
            <div class="flex">
                <button type="submit" class="flex-grow-0 px-4 py-3">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="flex-grow text-center font-bold py-3">新規登録</div>
                <div class="flex-grow-0 px-4 py-3"><i class="fas fa-chevron-right invisible"></i></div>
            </div>
        </form>
    </div>
    <div class="pt-20 px-8">
        <p class="text-3xl text-center pb-10 font-serif"><a href="/">Spotem</a></p>
        <p class="text-xs text-center my-2 text-blue-500 j-message">メールアドレスに認証コードを送信しました<br>コードを入力してください</p>
        <form action="/controller/sync/signup.php" method="post" name="final_submit">
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <input type="hidden" name="email" value="<?= $_POST["email"] ?>">
            <input type="hidden" name="password" value="<?= $_POST["password"] ?>">
            <p class="text-xs text-red-500 j-code-help ml-2 mb-1"></p>
            <div class="flex flex-grow bg-gray-50 border border-gray-200 rounded-md">
                <span class="rounded-tl-3xl rounded-bl-3xl px-3 flex items-center">
                    <i class="fas fa-key text-gray-500"></i>
                </span>
                <input type="text" name="code" inputmode="numeric" pattern="[0-9]{6}" class="w-full py-2 rounded-tr-3xl rounded-br-3xl bg-transparent outline-none" placeholder="認証コード" />
                <span class="px-3 flex items-center invisible j-code-check">
                    <i class="fas fa-check text-gray-500"></i>
                </span>
            </div>
            <input type="submit" class="w-full my-6 py-1 bg-green-400 rounded-md cursor-not-allowed j-submit" value="次へ" />
        </form>
    </div>
    <footer class="fixed bottom-0 w-full">
        <div class="py-5 bg-gray-100 border-t border-gray-200 pr-6 text-right text-xs">
            <span><i class="far fa-copyright"></i>&nbsp;</span>Kyoto-Computer-Gakuin
        </div>
    </footer>
</body>