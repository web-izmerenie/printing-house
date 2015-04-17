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

if (!empty($arResult['ITEMS']))
{?>
	<section class="catalog-block">
		<ul>
			<?foreach($arResult["ITEMS"] as $arItem){?>
				<li>
					<a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><img class="svg" src="<?=$arItem["ICON"]["SRC"];?>" class="svg">
						<?=$arItem["NAME"];?>
						<p><?=$arItem["PREVIEW_TEXT"];?></p>
					</a>
				</li>
			<?}?>
		</ul>
	</section>
<?}?>
