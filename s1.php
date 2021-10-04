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
    <script src="assets/public/s1.js" type="module" defer></script>
    <title>新規登録 / Spotem</title>
</head>

<body>
    <div class="px-4 _content">
        <p class="_back has-text-success is-inline">
            <span class="icon is-small is-right">
                <i class="fas fa-arrow-left"></i>
            </span>
            &nbsp;戻る
        </p>
        <p class="is-size-4 has-text-weight-bold has-text-white my-5 has-text-centered">アカウントを作成</p>
        <form action="s2.php" method="post">
            <div id="userid" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="text" name="userid" value="<?php if (isset($_POST["userid"])) echo $_POST["userid"] ?>" placeholder="ユーザーID">
                    <span class="icon is-small is-left">
                        <i class="fas fa-at"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
                <p class="help is-danger"></p>
            </div>
            <div id="name" class="field mb-5">
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium is-rounded" type="text" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"] ?>" placeholder="名前">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas j_icon"></i>
                    </span>
                </div>
            </div>
            <input class="input button is-rounded is-success j_submit" type="button" value="次へ" onclick="submit();" disabled>
        </form>
    </div>
</body>

</html>