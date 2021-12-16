<?php

namespace app\model;

/**
 * データベース接続クラス - 非同期通信
 */
class DB
{
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return bool
     */
    public static function set($query, $params)
    {
        $url = "https://naotoge5-works.tk/spotem/?set/";

        $data = array(
            "query" => $query,
            "params" => $params
        );

        $context = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
                'content' => http_build_query($data)
            )
        );
        $res = file_get_contents($url, false, stream_context_create($context));
        return json_decode($res,true);
    }

    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return array|false
     */
    public static function get($query, $params)
    {
        $url = "https://naotoge5-works.tk/spotem/?get";

        $data = array(
            "query" => $query,
            "params" => $params
        );

        $context = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
                'content' => http_build_query($data)
            )
        );
        $res = file_get_contents($url, false, stream_context_create($context));
        return json_decode($res,true);
    }
}
