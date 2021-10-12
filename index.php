<?php
session_start();

/*
pattern1

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
*/
$route = (!empty($_GET)) ? array_key_first($_GET) : 'top';

switch ($route) {
    case 'home':
    case 'search':
    case 'new':
    case 'login':
        $view = "view/" . $route . ".php";
        break;
    case 'signup':
        $view = "view/f.php";
        $route2 = (!empty($_GET["signup"])) ? $_GET["signup"] : 'f';
        switch ($route2) {
            case 's':
                if (isset($_POST["userid"])) $view = "view/s.php";
                break;
            case 't':
                if (isset($_POST["email"])) $view = "view/t.php";
                break;
            default:
                $view = "view/f.php";
                break;
        }
        break;
    case 'top':
        $view = "view/top.html";
        break;
    default:
        echo 'アカウント：' . $route;
        $view = "view/show.php";
        break;
}

include $view;
