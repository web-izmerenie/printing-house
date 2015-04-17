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
<section class="diferent-product">
	<ul>
		<?foreach($arResult["ITEMS"] as $arItem){
			if($_GET["ELEMENT_CODE"] == $arItem["CODE"])
					continue;
		?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
					<img class="svg" src="<?=$arItem["ICON"]["SRC"];?>">
					<?=$arItem["NAME"];?>
					<p><?=$arItem["PREVIEW_TEXT"];?></p>
				</a>
			</li>
		<?}?>
	</ul>
	<a href="/produktsiya/" class="all-product"><span>Вся Продукция</span></a>
</section>