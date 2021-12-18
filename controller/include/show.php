<?php
require_once "vendor/autoload.php";

$account = app\model\DB::get("SELECT users.id, users.name, users.details, users.image, STRFTIME('%d', date('now', 'localtime')) - STRFTIME('%d', users.logined_at) AS days, officials.postal, officials.address, officials.place_id FROM users left join officials on users.id = officials.userid WHERE id = :userid", [":userid" => $route]);
//print_r($account);
$account = ($account) ? $account[0] : null;
$tmp = app\model\DB::get("SELECT COUNT(following) AS following, (SELECT COUNT(userid) FROM follows WHERE following = :userid) AS follower FROM follows WHERE userid = :userid", [":userid" => $route]);
$account["following"] = $tmp[0]["following"];
$account["follower"] = $tmp[0]["follower"];
echo 'フォロー中：' . $account["following"] . '<br>フォロワー：' . $account["follower"];
echo '<script type="text/javascript">console.log(' . $account["days"] . ');</script>';
