<?php
session_start();
require_once "../../vendor/autoload.php";

$unique = $_POST["unique"];
$password = $_POST["password"];
$hashed_password = app\model\Hash::get($_POST["password"]);

$res = app\model\DB::get("SELECT id, password FROM users WHERE id = :key OR email = :key", [":key" => $unique]);
$location = "?login";
if (!empty($res) && app\model\Hash::check($password, $res[0]["password"])) {
    $_SESSION["userid"] = $res[0]["id"];
    app\model\Alert::set('ログインしました', 'success');
    $location = "?home";
} else {
    app\model\Alert::set('ユーザーIDまたはパスワードが違います', 'warning');
    $location = "?login=" . $unique;
}

header('Location: ../../' . $location);
