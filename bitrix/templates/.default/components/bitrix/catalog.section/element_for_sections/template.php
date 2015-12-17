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

if (!empty($arResult['ITEMS'])){?>
	<?foreach($arResult["ITEMS"] as $arItem){?>
		<?if(!empty($arItem['PROPERTIES']['ATT_SECTIONS']['VALUE'])){?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
					<div class="img">
						<img class="svg" src="<?=$arItem["ICON"]["SRC"];?>" class="svg">
					</div>
					<div class="text">
						<?=$arItem["NAME"];?>
						<p><?=$arItem["PREVIEW_TEXT"];?></p>
					</div>
				</a>
			</li>
		<?}?>
	<?}?>
<?}?>