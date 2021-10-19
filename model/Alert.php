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
        switch ($method) {
            case 'set':
                self::set($data["message"], $data["type"]);
                break;

            default:
                # code...
                break;
        }
    }

    /**
     * アラートの設定
     *
     * @param string $message
     * @param string $type
     * @return void
     */
    public static function set($message, $type)
    {
        $_SESSION["alert"] = ["message" => $message, "type" => $type];
    }
}
