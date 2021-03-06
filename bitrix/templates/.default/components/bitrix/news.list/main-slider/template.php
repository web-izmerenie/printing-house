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
	<section id="main-slider">
		<ul>
			<?foreach($arResult['ITEMS'] as $arItem){
			$resizePhoto = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1280, 'height'=>595), BX_RESIZE_IMAGE_EXACT, true);?>
			<li>
				<img src="<?=$resizePhoto['src'];?>" width="100%" title="<?=$arItem['PREVIEW_PICTURE']['TITLE'];?>">
				<div class="text">
					<h1><?=$arItem['NAME'];?></h1>
					<p><?=$arItem['PREVIEW_TEXT']?></p>
				</div>
			</li>
			<?}?>
		</ul>
	</section>
<?}?>
