<?php
session_start();

$route = (!empty($_GET)) ? array_key_first($_GET) : 'top';

switch ($route) {
    case 'home':
    case 'search':
    case 'new':
    case 'login':
    case 'settings':
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
        $view = "view/show.php";
        break;
}

include $view;
