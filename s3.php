<?php if (!isset($_POST["userid"])) {
    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja" class="has-background-black-ter">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/public/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="assets/public/auth.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/public/s3.js" type="module" defer></script>
    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="px-4 _content">
        <form action="s2.php" method="post" name="back">
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <input type="hidden" name="email" value="<?= $_POST["email"] ?>">
            <input type="hidden" name="password" value="<?= $_POST["password"] ?>">
        </form>
        <p class="_back has-text-success is-inline">
            <span class="icon is-small is-right">
                <i class="fas fa-arrow-left"></i>
            </span>
            &nbsp;戻る
        </p>
        <p class="is-size-4 has-text-weight-bold has-text-white my-5 has-text-centered">アカウントを作成</p>
        <form action="controller/auth.php" method="post" onsubmit="return false;">
            <p class="help is-warning has-text-centered mb-5">メールアドレスに認証コードを送信しました<br>コードを入力してください</p>
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <input type="hidden" name="email" value="<?= $_POST["email"] ?>">
            <input type="hidden" name="password" value="<?= $_POST["password"] ?>">
            <div id="code" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="text" inputmode="numeric" pattern="[0-9]{6}" name="code" placeholder="認証コード">
                    <span class="icon is-small is-left">
                        <i class="fas fa-key"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
                <p class="help is-danger"></p>
            </div>
            <input class="input button is-rounded is-success j_submit" type="button" value="登録する" onclick="submit();" disabled>
        </form>
    </div>
</body>

</html>