<?php
require_once('autoload.php');

$func = $_POST['func'];
$value = $_POST['value'];
echo $func($value); //可変関数

function sendAuthCode($value)
{
    $mail = new Mail($value);
    //コードの生成
    $code = "";
    for ($i = 0; $i < 6; $i++) {
        $code .= mt_rand(0, 9);
    }
    $mail->send("認証コードのご案内", "認証コード：" . $code . "\n\nこの番号を認証コード入力画面で入力してください。");

    return $code;
}

function getUserParam($userid)
{
    $user = User::get($userid);
    $userparams = ["userid" => $user->getUserId(), "name" => $user->getName()];
    return json_encode($userparams);
}

function getAlert($val)
{
    $alert = 0;
    if (isset($_SESSION['alert'])) {
        $alert = $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
    return json_encode($alert);
}
