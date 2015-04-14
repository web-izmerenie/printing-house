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
$this->setFrameMode(true);?>
<h2>ООО «Типография «Печатный двор»</h2>

<?foreach($arResult["ITEMS"] as $arItem){?>
	<div class="contact-item">
		<h2><?=$arItem["NAME"];?></h2>
		<ul>
			<li><?=$arItem['PROPERTIES']['ATT_TEL']['VALUE'][0];?></li>
			<?foreach(array_slice($arItem['PROPERTIES']['ATT_TEL']['VALUE'], 1) as $tel){?>
				<li><a href="tel:<?=$tel;?>"><?=$tel;?></a>,</li>
			<?}?>
		</ul>
		<a href="mailto:<?=$arItem['PROPERTIES']['ATT_EMAIL']['VALUE']?>"><?=$arItem['PROPERTIES']['ATT_EMAIL']['VALUE']?></a>
		<p><?=$arItem['PROPERTIES']['ATT_ADRES']['VALUE']?></p>
		<section class="map">
			<?=$arItem['PROPERTIES']['ATT_MAP']['~VALUE']?>
		</section>
	</div>
<?}?>
