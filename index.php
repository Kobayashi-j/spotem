<?php
session_start();

$route = (!empty($_GET)) ? array_key_first($_GET) : 'top';
$redirect = false;

switch ($route) {
    case 'home':
    case 'search':
    case 'info':
    case 'settings':
        if (isset($_SESSION["userid"])) {
            $view = "view/" . $route . ".php";
            break;
        }
        $redirect = "?login";
        break;
    case 'login':
        if (!isset($_SESSION["userid"])) {
            $view = "view/login.php";
            break;
        }
        $redirect = "?home";
        break;
    case 'signup':
        $step = (!empty($_GET["signup"])) ? $_GET["signup"] : '1';
        switch ($step) {
            case '1':
                $view = "view/signup1.php";
                break;
            case '2':
                if (isset($_POST["userid"])) {
                    $view = "view/signup2.php";
                    break;
                }
            case '3':
                if (isset($_POST["email"])) {
                    $view = "view/signup3.php";
                    break;
                }
            default:
                $redirect = "?signup";
                break;
        }
        break;
    case 'new':
        $step = (!empty($_GET["new"])) ? $_GET["new"] : '1';
        switch ($step) {
            case '1':
                $view = "view/new.php";
                break;
            case '2':
                if (isset($_POST["place_id"])) {
                    $view = "view/new2.php";
                    break;
                }
            default:
                $redirect = "?new";
                break;
        }
        break;
    case 'apply':
        $view = "view/apply.php";
        break;
    case 'top':
        $view = "view/top.php";
        break;
    default:
        $view = "view/show.php";
        break;
}
if ($redirect) {
    header("Location: /" . $redirect);
} else {
    include $view;
}
