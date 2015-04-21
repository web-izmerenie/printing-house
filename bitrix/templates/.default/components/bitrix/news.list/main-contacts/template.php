<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if(!empty($arResult['ITEMS'])){?>
	<div class="contacts">
		<?foreach($arResult['ITEMS'] as $arItem){?>
			<a class="tel" href="tel:<?=$arItem['PROPERTIES']['ATT_MAIN_TEL']['VALUE']?>"><?=$arItem['PROPERTIES']['ATT_MAIN_TEL']['VALUE']?></a>
			<a class="adress" href="/kontakty/"><span><?=$arItem['PROPERTIES']['ATT_MAIN_ADRES']['VALUE']?></span></a>
		<?}?>
		<a class="call-me module-window" href="#call-me"><span>Перезвоните мне</span></a>
	</div>
	<form id="call-me">
		<a class="close" href="#close"></a>
		<h1>Обратный звонок</h1>
		<ul>
			<li><input type="text" placeholder="Имя"></li>
			<li><span></span><input type="text" name="phone" placeholder="Номер телефона"></li>
		</ul>
		<input type="submit" value="Перезвоните мне">
	</form>
<?}?>

