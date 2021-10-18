<?php
require_once "../../vendor/autoload.php";;

$userid = $_POST["userid"];
$name = $_POST["name"];
$email = $_POST["email"];
$hashed_password = app\model\Hash::get($_POST["password"]);

$params = [":userid" => $userid, ":name" => $name, ":email" => $email, ":password" => $hashed_password];

$res = app\model\DB::set("INSERT INTO users VALUES(:userid, :name, :email, :password, :comment, :image, :is_official)", $params);

$location = "top";
if ($res) {
    app\model\Alert::set('登録が完了しました。', 'success');
    $_SESSION["userid"] = $userid;
    $location = "home";
} else {
    app\model\Alert::set('登録に失敗しました。再度操作をお願いします。', 'danger');
}

header('Location: ../../' . $location);
