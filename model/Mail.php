<?php

namespace app\model;
// PHPMailer のソースファイルの読み込み
require_once 'PHPMailer-6.5.0/src/Exception.php';
require_once 'PHPMailer-6.5.0/src/PHPMailer.php';
require_once 'PHPMailer-6.5.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Dotenv\Dotenv;

class Mail
{
    public static function send($address, $title, $body)
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 1));
        $dotenv->load();

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
            $mailer->addAddress($address); //宛先

            $mailer->Subject = $title;
            $mailer->Body = $body;

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
