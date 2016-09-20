<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/ajax/config.php');

$mail = new PHPMailer();
$mail->From = $config["FROM"];
$mail->FromName = $config["FROM_NAME"];
$mail->AddAddress($config["ADRESS"]);  // кому
$mail->CharSet = 'UTF-8';
$mail->Subject = "Сообщение с сайта ".$_SERVER['HTTP_HOST'];
$mail->Body = implode("\n", $_POST);

//отправить
if($mail->Send()){
	echo 'Отправлено';
}
