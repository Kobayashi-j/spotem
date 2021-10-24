<?php

namespace app\model;

class Alert implements Async
{
    /**
     * 
     * @return void
     */
    public static function call($method, $data = null)
    {
        $res = false;
        switch ($method) {
            case 'set':
                $res = self::set($data["message"], $data["type"]);
                break;
            case 'get':
                $res = self::get();
                break;
            default:
                # code...
                break;
        }
        return $res;
    }

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
