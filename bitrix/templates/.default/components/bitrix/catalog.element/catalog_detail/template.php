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
<section class="prewiev-text"><?=$arResult["DETAIL_TEXT"];?></section>
<section class="portfolio-module-item">
	<?foreach($arResult["PORTFOLIO"] as $arPortfolio){
		$resizeImg = CFile::ResizeImageGet($arPortfolio, array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
		<a rel="group" class="fancybox" href="<?=$resizeImg["src"];?>"><img src="<?=$resizeImg["src"];?>"></a>
	<?}?>
</section>
<?if(!empty($arResult["PRODUCT_IMG"])){?>
	<section class="products-block">
		<h2>Календарные блоки</h2>
		<ul>
			<?foreach($arResult["PRODUCT_IMG"] as $arProduct){
				$resizeImg = CFile::ResizeImageGet($arProduct, array('width'=>267, 'height'=>238), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li><img src="<?=$resizeImg["src"];?>"></li>
			<?}?>
		</ul>
		<p><?=$arResult["PROPERTIES"]["ATT_TEXT"]["VALUE"];?></p>
	</section>
<?}?>
