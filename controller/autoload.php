<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

session_start();
spl_autoload_register("classLoad");
function classLoad($class)
{
    require_once __DIR__ . "/../model/" . $class . ".php";
}
$dotenv = Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();
