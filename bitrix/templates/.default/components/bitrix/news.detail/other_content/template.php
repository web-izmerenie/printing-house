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
	<?=$arResult['PREVIEW_TEXT'];?>
</section>
<section class="detail">
	<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" title="<?=$arResult['DETAIL_PICTURE']['TITLE'];?>">
	<?=$arResult['DETAIL_TEXT'];?>
</section>
<section class="portfolio-module">
	<?foreach($arResult['PORFOLIO_PHOTO'] as $photo){
	$resizePhoto = CFile::ResizeImageGet($photo, array('width'=>500, 'height'=>450), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	?>
		<img src="<?=$resizePhoto['src'];?>">
	<?}?>
</section>
