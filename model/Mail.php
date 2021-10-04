<?php
require '../vendor/autoload.php';

use Dotenv\Dotenv;

// PHPMailer のソースファイルの読み込み
require_once 'PHPMailer-6.5.0/src/Exception.php';
require_once 'PHPMailer-6.5.0/src/PHPMailer.php';
require_once 'PHPMailer-6.5.0/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Mail
{
    private $email;
    function __construct(string $email)
    {
        $this->email = $email;

        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 1));
        $dotenv->load();
    }
    /**
     * メール送信
     *
     * @param string $title 件名
     * @param string $body 本文
     * @return int 送信完了:1, 送信失敗:0
     */
    function send(string $title, string $body)
    {
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
            $mailer->addAddress($this->email); //宛先

            $mailer->Subject = $title;
            $mailer->Body = $body;

            $mailer->send();
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
        } finally {
            unset($mailer);
        }
        return 0;
    }
}
