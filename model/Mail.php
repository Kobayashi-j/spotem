<?php
// PHPMailer のソースファイルの読み込み
require_once 'PHPMailer-6.5.0/src/Exception.php';
require_once 'PHPMailer-6.5.0/src/PHPMailer.php';
require_once 'PHPMailer-6.5.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public static function call($method, $data)
    {
        $res = false;
        switch ($method) {
            case 'send':
                $res = self::send($data["email"], $data["params"]);
                break;
            default:
                # code...
                break;
        }
        return $res;
    }

    public static function send($email, $params)
    {
        $res = false;
        try {
            $mailer = new PHPMailer(true);
            $mailer->CharSet = 'utf-8';
            $mailer->isSMTP();
            $mailer->Host = $_ENV['MAIL_HOST'];
            $mailer->SMTPAuth = true;
            $mailuser = $_ENV['MAIL_USER'];
            $mailer->Username = $mailuser;
            $mailer->Password = $_ENV['MAIL_PASSWORD'];
            $mailer->SMTPSecure = 'ssl';
            $mailer->Port = 465;
            $mailer->setFrom($mailuser, 'Spotem'); //送信者
            $mailer->addAddress($email); //宛先

            $mailer->Subject = $params["title"];
            $mailer->Body = $params["body"];

            $mailer->send();
            $res = true;
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            unset($mailer);
        }
        return $res;
    }
}
