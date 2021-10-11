<?php
class Hash implements Async
{

    /**
     * @return string|bool get:ハッシュ化された値, check:値がハッシュ化済みの値と同じかどうか
     */
    public static function call($method, $data)
    {
        $res = false;
        switch ($method) {
            case 'get':
                $res = self::get($data["value"]);
                break;
            case 'check':
                $res = self::check($data["value"], $data["hashed_value"]);
                break;
        }
        return $res;
    }

    public static function get($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public static function check($value, $hashed_value)
    {
        return password_verify($value, $hashed_value);
    }
}
