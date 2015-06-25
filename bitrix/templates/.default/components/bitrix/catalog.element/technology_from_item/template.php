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
<?if(isset($arResult["ATT_ELEMENTS"])){?>
<section class="technology_module">
	<h2><?=$arResult["PROPERTIES"]["ATT_TECHNOLOGY"]["NAME"];?></h2>
	<ul>
		<?foreach($arResult["ATT_ELEMENTS"] as $arItem){?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]);?>">
					<span><?=$arItem["NAME"];?></span>
				</a>
			</li>
		<?}?>
	</ul>
</section>
<section id="make-order" class="product-order">
	<a href="#"><span>Оформить заказ</span></a>
</section>
<pre><?print_r($arResult["ATT_ELEMENTS"]);?></pre>
<?}?>
