<?php
$recepient = "andrey.chechkin@web-izmerenie.ru, p-dvor-t@yandex.ru";
$sitename = "Сообщение с сайте ".$_SERVER['HTTP_HOST'];
$pagetitle = "Новая заявка с сайта \"$sitename\"";

$message = implode("\n", $_POST);

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");