<?php

interface Async
{
    /**
     * メソッド呼び出し関数
     *
     * @param string $method 使用する関数の文字列
     * @param array $data 連想配列
     */
    public static function call($method, $params);
}
