<?php
/**
 * 実装未定
 * @deprecated 未実装
 * 
 */
class User
{
    private $userid;
    private $name;
    private $email;
    private $password;
    private $comment;
    private $image;
    private $is_official;

    function __construct(string $userid, string $name, string $email)
    {
        $this->userid = $userid;
        $this->name = $name;
        $this->email = $email;
        //ather
        $this->password = null;
        $this->comment = null;
        $this->image = null;
        $this->is_official = 0;
    }

    function setIsOfficial(bool $is_official)
    {
        $this->is_official = $is_official;
        return $this;
    }
    function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
    function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    function getUserId()
    {
        return $this->userid;
    }

    function getName()
    {
        return $this->name;
    }
    /**
     * Undocumented function
     * @deprecated パスワードはオブジェクトに保存されません
     *
     * @return null
     */
    function getPassword()
    {
        return $this->password;
    }

    function getIsOfficial()
    {
        return $this->is_official;
    }




    function register($password)
    {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $flag = false;
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db'); //相対パスでええのか
            $db->enableExceptions(true);
            $stmt = $db->prepare("INSERT INTO users VALUES(:userid, :name, :email, :password, :comment, :image, :is_official)");
            $stmt->bindParam(':userid', $this->userid);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $hash_password);
            $stmt->bindParam(':comment', $this->comment);
            $stmt->bindParam(':image', $this->image);
            $stmt->bindParam(':is_official', $this->is_official);
            $stmt->execute();
            $flag = true;
        } catch (Exception $e) {
            //$flag = Config::errorType($e);
        } finally {
            $db->close();
        }
        return $flag;
    }

    function update()
    {
    }
    /**
     * Undocumented function
     *
     * @param string $unique userid or email
     * @return bool 既存のユーザIDであれば1(true)そうでなければ0(false)
     */
    static function find(string $unique): bool
    {
        $flag = false;
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db');
            $db->enableExceptions(true);
            $stmt = $db->prepare("SELECT COUNT(userid) FROM users WHERE userid = :key OR email = :key");
            $stmt->bindParam(':key', $unique);
            $result = $stmt->execute();
            $row = $result->fetchArray(SQLITE3_ASSOC);
            if ($row['COUNT(userid)']) $flag = true;
        } catch (Exception $e) {
            $e->getMessage();
        } finally {
            $db->close();
        }
        return $flag;
    }
    /**
     * Undocumented function
     * @deprecated 未実装
     *
     * @return array[user]
     */
    static function findAll(string $text)
    {
        $rows = [];
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db');
            $result = $db->query("SELECT * FROM users");
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $rows[] = $row;
            }
            $result->finalize();
        } catch (Exception $e) {
            $e->getMessage();
        } finally {
            $db->close();
        }
        return $rows;
    }
    /**
     * Undocumented function
     *
     * @param string|int $unique userid or email
     * 
     * @return user|false
     */
    static function get($unique)
    {
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db'); //相対パスでええのか
            $db->enableExceptions(true);
            $stmt = $db->prepare("SELECT * FROM users WHERE userid = :key OR email = :key");
            $stmt->bindParam(':key', $unique);
            $result = $stmt->execute();
            $row = $result->fetchArray(SQLITE3_ASSOC);
            if ($row) {
                $user = new self($row['userid'], $row['name'], $row['email']);
                $user->setComment($row['comment'])->setImage($row['image'])->setIsOfficial($row['is_official']);
                $row = $user;
            }
        } catch (Exception $e) {
            $e->getMessage();
        } finally {
            $db->close();
        }
        return $row;
    }

    /**
     * Undocumented function
     * @deprecated 簡易ログイン
     *
     * @param string $usreid
     * @param string $password
     * @return bool 
     */
    static function auth(string $usreid, string $password)
    {
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db'); //相対パスでええのか
            $db->enableExceptions(true);
            $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE userid = :userid AND password = :password");
            $stmt->bindParam(':userid', $usreid);
            $stmt->bindParam(':password', $password);
            $result = $stmt->execute();
            $row = $result->fetchArray(SQLITE3_ASSOC);
        } catch (Exception $e) {
        } finally {
            $db->close();
        }
        return $row;
    }

    /**
     * Undocumented function
     * 
     * @param string $unique userid or email
     * @param string $password password
     * @return bool 該当のuserが存在すれば true, そうでなければfalse
     */
    static function authSecure(string $unique, string $password): bool
    {
        $flag = false;
        try {
            $db = new SQLite3(__DIR__ . '/../db/spotem.db'); //相対パスでええのか
            $db->enableExceptions(true);
            $stmt = $db->prepare("SELECT password FROM users WHERE userid = :key OR email = :key");
            $stmt->bindParam(':key', $unique);
            $result = $stmt->execute();
            $row = $result->fetchArray(SQLITE3_ASSOC);
            if ($row) {
                if (password_verify($password, $row['password'])) $flag = true;
            }
        } catch (Exception $e) {
        } finally {
            $db->close();
        }
        return $flag;
    }
}
