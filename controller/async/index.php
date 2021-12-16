<?php
require_once "../../vendor/autoload.php";

/**
 * メール送信
 *
 * @param array $params [address, title, body]
 * @return bool
 */
function sendMail($params)
{
    return app\model\Mail::send($params["address"], $params["title"], $params["body"]);
}

/**
 * 通知の取得
 *
 * @param array $params [address, title, body]
 * @return bool
 */
function getAlert($params = null)
{
    return app\model\Alert::get();
}

/**
 * ハッシュ化した値の取得
 *
 * @param array $params [value]
 * @return string
 */
function getHash($params)
{

    return password_hash($params["value"], PASSWORD_DEFAULT);
}

/**
 * 値とハッシュ化された値が一致するか
 *
 * @param array $params [value, hashed_value]
 * @return bool
 */
function checkHash($params)
{
    return password_verify($params["value"], $params["hashed_value"]);
}

// 処理
$method = array_key_first($_GET);
$res = $method($_POST);

/*
$requests = ['TABLE' => $array[0], 'ID' => $array[1], 'METHOD' => $_SERVER['REQUEST_METHOD']];
$array = ['URI' => $request_uri, 'METHOD' => $_SERVER['REQUEST_METHOD']];
*/

// Origin null is not allowed by Access-Control-Allow-Origin.とかのエラー回避の為、ヘッダー付与
header("Access-Control-Allow-Origin: *");

echo json_encode($res);
