<?php
require_once __DIR__ . "/../autoload.php";
$userid = $_POST["userid"];
$name = $_POST["name"];
$email = $_POST["email"];
$hashed_password = Hash::get($_POST["password"]);

$params = [":userid" => $userid, ":name" => $name, ":email" => $email, ":password" => $hashed_password];

$res = DB::set("INSERT INTO users VALUES(:userid, :name, :email, :password, :comment, :image, :is_official)", $params);

$location = "top";
if ($res) {
    Alert::set('登録が完了しました。', 'success');
    $_SESSION["userid"] = $userid;
    $location = "home";
} else {
    Alert::set('登録に失敗しました。再度操作をお願いします。', 'danger');
}

header('Location: ../../' . $location);
