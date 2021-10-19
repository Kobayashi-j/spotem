<?php
require_once "../../vendor/autoload.php";;

$unique = $_POST["unique"];
$password = $_POST["password"];
$hashed_password = app\model\Hash::get($_POST["password"]);

$res = app\model\DB::get("SELECT userid, password FROM users WHERE userid = :key OR email = :key", [":key" => $unique]);
$location = "?login";
if (!empty($res) && app\model\Hash::check($password, $res[0]["password"])) {
    $_SESSION["userid"] = $res[0]["userid"];
    app\model\Alert::set('ログインしました', 'success');
    $location = "?home";
} else {
    app\model\Alert::set('ユーザーIDまたはパスワードが違います', 'warning');
    $location = "?login=" . $unique;
}

header('Location: ../../' . $location);

/*
$location = "top";
if ($res) {
    app\model\Alert::set('登録が完了しました。', 'success');
    $_SESSION["userid"] = $userid;
    $location = "home";
} else {
    app\model\Alert::set('登録に失敗しました。再度操作をお願いします。', 'danger');
}

header('Location: ../../' . $location);*/
