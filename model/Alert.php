<?php

namespace app\model;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Alert
{
    /**
     * アラートの設定
     *
     * @param string $message
     * @param string $type
     * @return bool
     */
    public static function set($message, $type)
    {
        $_SESSION["alert"] = ["message" => $message, "type" => $type];
        return true;
    }

    /**
     * アラートの取得
     *
     * @return array
     */
    public static function get()
    {
        $alert = (isset($_SESSION["alert"])) ? $_SESSION["alert"] : false;
        unset($_SESSION["alert"]);
        return $alert;
    }
}
