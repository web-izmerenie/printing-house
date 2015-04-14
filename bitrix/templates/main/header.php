<?php
$html_classes = array();
$main_classes = array();
// <html> classes

if(defined('tipograpthy'))
	$html_classes = array('tipograpthy');
if(!defined('no_content_block'))
	$main_classes = array('content-block');
if(defined('technologi_item'))
	$html_classes = array('technologi_item');

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);

$tplPath = "/bitrix/templates/main/";
?>
<!DOCTYPE html>
<html class="<?=$html_classes?>">

<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead()?>
	<meta name="viewport" content="width=1024">
	<link href="<?=$tplPath;?>styles/build/build.css" rel="stylesheet">
	<script src="<?=$tplPath;?>scripts/libs/jquery-2.1.3.min.js"></script>
	<script src="<?=$tplPath;?>scripts/libs/slick.min.js"></script>
	<script src="<?=$tplPath;?>scripts/libs/jquery.inlinesvg.js"></script>
	<script src="<?=$tplPath;?>scripts/libs/jquery.removeWhitespace.js"></script>
	<script src="<?=$tplPath;?>scripts/libs/jquery.collagePlus.js"></script>
	<script src="<?=$tplPath;?>scripts/main.js"></script>
</head>

<body>
	<?$APPLICATION->ShowPanel();?>
	<div class="wrapper">

		<header class="header">
			<?if ($_SERVER[ 'REQUEST_URI']=='/' ) {?>
				<div id="main-logo"></div>
			<?}else{?>
				<a href="/" class="logo"></a>
			<?}?>
			<div class="contenthead">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top-menu",
					array(
						"ROOT_MENU_TYPE" => "top",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
					),
					false
				);?>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
					"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false
				);?>
			</div>
		</header>
		<!-- .header-->

		<main class="content <?=$main_classes;?>">
			<?if(defined("breadcrumb")){?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"breadcrumb",
					Array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "-"
					)
				);?>
			<?}?>
		<?if(!defined('no_content_block')){?><h1><?$APPLICATION->ShowTitle(false)?></h1><?}?>
