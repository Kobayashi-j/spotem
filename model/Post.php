<?php
/**
 * 実装未定
 * @deprecated 未実装
 * 
 */
class Post
{
    private $id;
    private $_userid;
    private $body;
    private $time;
    private $official;
    private $location;

    static function all(array $userids, string $count = NULL)
    {
        $userids_str = "";
        for ($i = 0; $i < count($userids); $i++) {
            if ($i != 0) $userids_str .= ", ";
            $userids_str .= $userids[$i];
        }
        $query = "SELECT * FROM posts";
        if (is_null($count)) {
            $query .= " WHERE userid IN (" . $userids_str . ") ORDER BY time LIMIT 20";
        } else {
            $query .= " WHERE userid IN (" . $userids_str . ") ORDER BY time LIMIT 20 OFFSET " . $count * 20;
        }
        $columns = NULL;

        try {
            $db = new SQLite3(''); //相対パスでええのか
            $results = $db->query($query);
            $columns = $results->fetchArray();
            $results->finalize();
        } catch (Exception $e) {
            $e->getMessage();
        } finally {
            $db->close();
        }
        return $columns;
    }
}
