<?php

class Alert implements Async
{
    /**
     * 
     * @return void
     */
    public static function call($method, $data)
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
        switch ($type) {
            case 'success':
            case 'warning':
            case 'danger':
                $_SESSION["alert"] = ["message" => $message, "class" => 'has-background-' . $type . '-light'];
                break;
            case 'info':
            default:
                $_SESSION["alert"] = ["message" => $message, "class" => 'has-background-info-light'];
                break;
        }
    }
}
