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
	$resizePhoto = CFile::ResizeImageGet($photo, array('width'=>1280, 'height'=>1024), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	$smalPhoto = CFile::ResizeImageGet($photo, array('width'=>400, 'height'=>400), BX_RESIZE_IMAGE_EXACT, true);?>
		<a rel="group" class="fancybox" href="<?=$resizePhoto["src"];?>"><img src="<?=$smalPhoto["src"];?>"></a>
	<?}?>
</section>
