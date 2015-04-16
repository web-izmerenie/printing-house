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
<?$APPLICATION->SetPageProperty("title", $arResult["SECTION"]["NAME"]);?>

<section class=<?if($arResult["SECTION"]["DEPTH_LEVEL"] == 0){?>"production_view"<?}else{?>"production"<?}?>>
	<?if($arResult["SECTION"]["DEPTH_LEVEL"] != 0 or !empty($arResult["SECTION"]["PATH"]["0"]["DESCRIPTION"])){?>
		<section class="prewiev-text">
			<?=$arResult["SECTION"]["PATH"]["0"]["DESCRIPTION"]?>
		</section>
	<?}?>

	<?if($arResult["SECTIONS_COUNT"] != 0){?>
	<section class="catalog-block">
		<ul>
			<?foreach($arResult['SECTIONS'] as $arItem){
				if($arResult["SECTION"]["ID"] == $arItem["IBLOCK_SECTION_ID"]){?>
					<li>
						<a href="<?=$arItem['SECTION_PAGE_URL'];?>">
							<img class="svg" src="<?=$arItem['ICON_PATH']?>"><span><?=$arItem['NAME'];?></span>
							<p><?=$arItem['UF_TEXT']?></p>
						</a>
					</li>
				<?}
			}
			unset($arItem);
			?>
		</ul>
	</section>
	<?}?>

	<?if(!empty($arResult["SECTION"]["PORTFOLIO"])){?>
		<section class="portfolio-module">
			<?foreach($arResult["SECTION"]["PORTFOLIO"] as $arPortfolio){?>
				<img src="<?=$arPortfolio["SRC"];?>">
			<?}?>
		</section>
	<?}?>

</section>
