<?php
class Config
{
    static function errorType(Exception $e)
    {
        $message = $e->getMessage();
        if (isset($message)) {
            if (strpos($message, 'UNIQUE') === false) {
                return 0;
            } else {
                return -1;
            }
        }
    }
}
