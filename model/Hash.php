<?php

namespace app\model;

class Hash
{

    public static function get($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public static function check($value, $hashed_value)
    {
        return password_verify($value, $hashed_value);
    }
}
