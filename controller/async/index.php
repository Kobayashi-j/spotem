<?php
require_once __DIR__ . "/../autoload.php";

/*
    controller/async/db/get
    controller/async/db/set
    controller/async/mail/send
    controller/async/hash/get
    controller/async/hash/check
    controller/async/alert/get
*/
$request_uri = $_SERVER['REQUEST_URI'];
// $method = $_SERVER['REQUEST_METHOD'];
$request_uri = str_replace('/controller/async/', '', $request_uri);
$tmp = explode('/', $request_uri);
$class = $tmp[0];
$method = $tmp[1];
$data = $_POST;

$res = false;

switch ($class) {
    case 'db':
        $res = DB::call($method, $data);
        break;
    case 'mail':
        $res = Mail::call($method, $data);
        break;
    case 'hash':
        $res = Hash::call($method, $data);
        break;
    default:
        $res = ["message" => 'パラメータが違います'];
}


/*
$requests = ['TABLE' => $array[0], 'ID' => $array[1], 'METHOD' => $_SERVER['REQUEST_METHOD']];
$array = ['URI' => $request_uri, 'METHOD' => $_SERVER['REQUEST_METHOD']];
*/

// Origin null is not allowed by Access-Control-Allow-Origin.とかのエラー回避の為、ヘッダー付与
header("Access-Control-Allow-Origin: *");

echo json_encode($res);
