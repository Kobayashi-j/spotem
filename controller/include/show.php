<?php
require_once "vendor/autoload.php";

$account = app\model\DB::get("SELECT userid, name, comment, image, is_official FROM users WHERE userid = :userid", [":userid" => $route]);
$account = $account[0];