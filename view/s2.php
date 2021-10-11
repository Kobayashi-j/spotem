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
    <link rel="stylesheet" href="../view/css/bulma.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="../view/css/auth.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../view/js/s2.js" type="module" defer></script>
    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="px-4 _content">
        <form action="/signup" method="post" name="back">
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
        </form>
        <p class="_back has-text-success is-inline">
            <span class="icon is-small is-right">
                <i class="fas fa-arrow-left"></i>
            </span>
            &nbsp;戻る
        </p>
        <p class="is-size-4 has-text-weight-bold has-text-white my-5 has-text-centered">アカウントを作成</p>
        <form action="/signup/t" method="post">
            <input type="hidden" name="userid" value="<?= $_POST["userid"] ?>">
            <input type="hidden" name="name" value="<?= $_POST["name"] ?>">
            <div id="email" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="email" name="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"] ?>" placeholder="メールアドレス">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
                <p class="help is-danger"></p>
            </div>
            <div id="password" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="password" name="password" oncopy="return false" value="<?php if (isset($_POST["password"])) echo $_POST["password"] ?>" placeholder="パスワード（8文字以上の半角英数）">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
                <p class="help is-danger"></p>
            </div>
            <div id="password_check" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="password" name="password_check" oncopy="return false" value="<?php if (isset($_POST["password"])) echo $_POST["password"] ?>" placeholder="確認">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
                <p class="help is-danger"></p>
            </div>
            <input class="input button is-rounded is-success j_submit" type="button" value="次へ" onclick="submit();" disabled>
        </form>
    </div>
</body>

</html>