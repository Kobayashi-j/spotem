<?php
session_start();
spl_autoload_register("classLoad");
function classLoad($class)
{
    require_once __DIR__ . "/../model/" . $class . ".php";
}
