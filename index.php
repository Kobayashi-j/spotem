<?php
session_start();

// ルーティング
$route = (!empty($_GET)) ? array_key_first($_GET) : 'top';
$redirect = false;

switch ($route) {
    case 'home':
    case 'search':
    case 'info':
    case 'settings':
        if (!isset($_SESSION["userid"])) {
            $redirect = "?login";
            break;
        }
        $view = "view/" . $route . ".php";
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
        if (!isset($_SESSION["userid"])) {
            $redirect = "?login";
            break;
        }
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
        if (!isset($_SESSION["userid"])) {
            $redirect = "?login";
            break;
        }
        $step = (!empty($_GET["apply"])) ? $_GET["apply"] : '1';
        switch ($step) {
            case '1':
                $view = "view/apply.php";
                break;
            case '2':
                // 修正必須
                $view = "view/apply2.php";
                break;
            default:
                $redirect = "?apply";
                break;
        }
        break;
    case 'top':
        $view = "view/top.php";
        break;
    default:
        $view = ($route === $_SESSION["userid"]) ? "view/admin.php" : "view/guest.php";
        break;
}

// リダイレクトが必要な場合
if ($redirect) {
    header("Location: /" . $redirect);
} else {
    include $view;
}
