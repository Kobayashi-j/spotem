<?php
session_start();
require_once "../../vendor/autoload.php";;

$place_id = $_POST["place_id"];
$place = $_POST["place"];
$body = $_POST["body"];
$hashed_password = app\model\Hash::get($_POST["password"]);

$params = [":userid" => $userid, ":name" => $name, ":email" => $email, ":password" => $hashed_password];

$res = app\model\DB::set("INSERT INTO users (userid, name, email, password) VALUES (:userid, :name, :email, :password)", $params);

$location = "";
if ($res) {
    app\model\Alert::set('登録が完了しました。', 'success');
    $_SESSION["userid"] = $userid;
    $location = "?home";
} else {
    app\model\Alert::set('登録に失敗しました。再度操作をお願いします。', 'danger');
}

header("Location: ../../" . $location);