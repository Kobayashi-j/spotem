<?php
require_once "vendor/autoload.php";

$account = app\model\DB::get("SELECT users.id, users.name, users.details, users.image, officials.postal, officials.address, officials.place_id FROM users left join officials on users.id = officials.userid WHERE id = :id", [":id" => $route]);
//print_r($account);
$account = ($account) ? $account[0] : null;
print_r($account);
