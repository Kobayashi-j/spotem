<?php
require_once "controller/autoload.php";

$view = "view/top.html";

$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri, 1);
$split_uri = explode('/', $uri);
$route1 = $split_uri[0];
// $route2 = $split_uri[1];

switch ($route1) {
    case 'home':
    case 'search':
    case 'new':
    case 'login':
        $view = "view/" . $route1 . ".php";
        break;
    case 'signup':
        $tmp = $split_uri;
        $tmp[] = "f";
        switch ($tmp[1]) {
            case 's':
                $view = "view/s2.php";
                break;
            case 't':
                $view = "view/s3.php";
                break;
            default:
                $view = "view/s1.php";
                break;
        }
        break;
    case 'show':
        $view = "view/show.php";
        break;
    case 'top':
        $view = "view/top.html";
        break;
    default:
        // アカウントがあれば表示
        break;
}
// routing

include $view;
