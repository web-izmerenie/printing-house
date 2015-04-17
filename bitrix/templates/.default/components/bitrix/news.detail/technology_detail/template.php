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
<section class="prewiev-text">
	<?=$arResult["DETAIL_TEXT"];?>
</section>
<section class="portfolio-module">
	<?foreach($arResult["PORFOLIO_PHOTO"] as $photo){
	$resizePhoto = CFile::ResizeImageGet($photo, array("width"=>500, "height"=>450), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	?>
		<img src="<?=$resizePhoto["src"];?>">
	<?}?>
</section>
<section class="make">
	<h2>Офсетная печать применяется в</h2>
	<ul>
		<?foreach($arResult["ATT_SECTIONS"] as $arItem){?>
		<li>
			<a href="<?=$arItem["SECTION_PAGE_URL"]?>"><img class="svg" src="<?=$arItem["ICON_PATH"];?>"><?=$arItem["NAME"];?>
				<p><?=$arItem["UF_TEXT"];?></p>
			</a>
		</li>
		<?}?>
	</ul>
</section>
