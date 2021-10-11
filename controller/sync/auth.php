<?php
require_once('autoload.php');

$request_url = $_SERVER['HTTP_REFERER'];

if (strpos($request_url, 'login')) {
    $unique = $_POST['unique'];
    $password = $_POST['password'];
    if (User::authSecure($unique, $password)) {
        $user = User::get($unique);
        $_SESSION['userid'] = $user->getUserId();
        $_SESSION['alert'] = 'ログインしました';
        header('Location: ../home.html');
    } else {
        //$_SESSION['alert'] = Config::alert(false, 'ユーザーID、メールまたはパスワードが違います');
        $_SESSION['alert'] = 'ユーザーID、メールまたはパスワードが違います';
        header('Location: ../login.html?unique=' . $unique);
    }
} else {
    $userid = $_POST['userid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User($userid, $name, $email);
    if ($user->register($password)) {
        $_SESSION['userid'] = $user->getUserId();
        $_SESSION['alert'] = '登録が完了しました';
        header('Location: ../home.html');
    } else {
        $_SESSION['alert'] = '登録に失敗しました。再度おねがします';
    }
}
