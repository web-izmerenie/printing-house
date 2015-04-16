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
<?if(!empty($arResult['SECTIONS'])){
$sections = array_slice($arResult['SECTIONS'], 0, 16);
?>
	<section class="main-catalog">
		<ul>
			<?foreach($sections as $arItem){?>
				<li>
					<a href="<?=$arItem['SECTION_PAGE_URL'];?>">
						<img class="svg" src="<?=$arItem['ICON_PATH']?>"><span><?=$arItem['NAME'];?></span>
					</a>
				</li>
			<?}?>
		</ul>
		<a class="button1" href="/produktsiya/"><span>Вся продукция</span></a>
	</section>
<?}?>
