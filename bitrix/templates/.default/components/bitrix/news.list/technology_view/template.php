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
?>
<?if(!empty($arResult['ITEMS'])){?>
	<ul class="technology_view">
		<?foreach($arResult['ITEMS'] as $arItem){
		$photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>202, 'height'=>193), BX_RESIZE_IMAGE_EXACT, true);
		?>
			<li>
				<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><img src="<?=$photo['src'];?>"></a>
					<span class="text">
						<a class="name" href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
						<p><?=$arItem['PREVIEW_TEXT'];?></p>
					</span>
			</li>
		<?}?>
	</ul>
<?}?>
