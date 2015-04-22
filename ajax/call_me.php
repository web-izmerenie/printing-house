<?php

$recepient = "sindicat61@yandex.ru";
$sitename = "Заказ звонка сайта ".$_SERVER['HTTP_HOST'];

$message = implode("\nтрат", $_POST);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");