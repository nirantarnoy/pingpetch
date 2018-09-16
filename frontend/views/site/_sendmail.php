<?php
/**
 * Created by PhpStorm.
 * User: niran.w
 * Date: 16/09/2018
 * Time: 09:21
 */
require_once Yii::$app->basePath.('/phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tls';
$mail->SMTPSecure = "ssl";

$mail->Host = 'smtp.gmail.com'; // SMTP server
$mail->Port = 465; // พอร์ท


$mail->Username = 'nirantarnoy@gmail.com'; // account SMTP
$mail->Password = 'somsri15'; // รหัสผ่าน SMTP
$mail->SetFrom('nirantarnoy@gmail.com','tarlek');
//$mail->AddReplyTo("info@tcnap.org", "info@tcnap.org");
$mail->Subject = $title;

$body = '
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <title>แจ้งเตือนจากเว็บไซต์พิงค์เพรช</title>
</head>
<body style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #676867; height: 100% !important; margin: 0; padding: 0; width: 100% !important"><style type="text/css">
      </body>
    </html>';

$mail->MsgHTML($message."<br />".$email);
$mail->AddAddress('niran_tarlek@hotmail.com', 'niran');

if(!$mail->Send()) {
    //return "Mailer Error: " . $mail->ErrorInfo;
    return 0;
} else {
    header('location: http://www.pingpetch.com/');
    //return 1;
}