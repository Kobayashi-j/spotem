<?php

/**
 * データベース接続クラス - 非同期通信
 */
class DB implements Async
{
    public static function call($method, $data)
    {
        $res = false;
        switch ($method) {
            case 'set':
                $res = self::set($data["query"], $data["params"]);
                break;
            case 'get':
                $res = self::get($data["query"], $data["params"]);
                break;
            default:
                # code...
                break;
        }
        return $res;
    }
    /**
     * Undocumented function
     *
     * @param string $query
     * @param array $params
     * @return bool
     */
    public static function set($query, $params)
    {
        $res = false;
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db');
            $db->enableExceptions(true);
            $stmt = $db->prepare($query);
            $stmt = self::setParams($stmt, $params);
            $stmt->execute();
            $res = true;
        } catch (Exception $e) {
            //$flag = Config::errorType($e);
        } finally {
            $db->close();
        }
        return $res;
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
        $res = [];
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db');
            $db->enableExceptions(true);
            $stmt = $db->prepare($query);
            $stmt = self::setParams($stmt, $params);
            $result = $stmt->execute();
            while ($tmp = $result->fetchArray(SQLITE3_ASSOC)) {
                $res = $res + [key($tmp) => $tmp[key($tmp)]];
            }
        } catch (Exception $e) {
            //$flag = Config::errorType($e);
            $res = false;
        } finally {
            $db->close();
        }
        return $res;
    }

    /**
     * パラメータをSQLite3Stmtに設定
     *
     * @param SQLite3Stmt $stmt
     * @param array $params
     * @return SQLite3Stmt
     */
    protected static function setParams(SQLite3Stmt $stmt, $params)
    {
        $keys = array_keys($params);
        foreach ($keys as $key) {
            $stmt->bindParam($key, $params[$key]);
        }
        return $stmt;
    }

    /**
     * パラメータをSQLite3Stmtに設定()
     *
     * @deprecated foreachの挙動が変（valueがすべて上書きされる？？）
     * 
     * @param SQLite3Stmt $stmt
     * @param array $params
     * @return SQLite3Stmt
     */
    protected static function setParams_d(SQLite3Stmt $stmt, $params)
    {
        foreach ($params as $key => $value) {
            $stmt->bindParam($key, $value);
        }
        return $stmt;
    }
}
