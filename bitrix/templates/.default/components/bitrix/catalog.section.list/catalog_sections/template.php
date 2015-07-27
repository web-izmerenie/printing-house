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

	<?if($arResult["SECTION"]["DEPTH_LEVEL"] != 0 or !empty($arResult["SECTION"]["PATH"]["0"]["DESCRIPTION"])){?>
		<section class="prewiev-text">
			<?=$arResult["SECTION"]["PATH"]["0"]["DESCRIPTION"]?>
		</section>
	<?}?>

	<?if($arResult["SECTION"]["DEPTH_LEVEL"] == 0){?>
		<section class="catalog-block">
			<ul>
				<?foreach($arResult['SECTIONS'] as $arItem){?>
					<?if($arItem['ACTIVE'] == 'Y'){?>
						<li>
							<a href="<?=$arItem['SECTION_PAGE_URL'];?>">
								<div class="img">
									<img class="svg" src="<?=$arItem['ICON_PATH']?>">
								</div>
								<div class="text">
									<span><?=$arItem['NAME'];?></span>
									<p><?=$arItem['UF_TEXT']?></p>
								</div>
							</a>
						</li>
					<?}?>
				<?}?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog.section", 
					"element_for_sections", 
					array(
						"IBLOCK_TYPE" => "catalog",
						"IBLOCK_ID" => "5",
						"SECTION_ID" => "",
						"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
						"SECTION_USER_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"ELEMENT_SORT_FIELD" => "sort",
						"ELEMENT_SORT_ORDER" => "asc",
						"ELEMENT_SORT_FIELD2" => "id",
						"ELEMENT_SORT_ORDER2" => "desc",
						"FILTER_NAME" => "arrFilter",
						"INCLUDE_SUBSECTIONS" => "Y",
						"SHOW_ALL_WO_SECTION" => "Y",
						"PAGE_ELEMENT_COUNT" => "30000",
						"LINE_ELEMENT_COUNT" => "3",
						"PROPERTY_CODE" => array(
							0 => "ATT_SECTIONS",
							1 => "",
						),
						"OFFERS_LIMIT" => "5",
						"TEMPLATE_THEME" => "blue",
						"MESS_BTN_BUY" => "Купить",
						"MESS_BTN_ADD_TO_BASKET" => "В корзину",
						"MESS_BTN_SUBSCRIBE" => "Подписаться",
						"MESS_BTN_DETAIL" => "Подробнее",
						"MESS_NOT_AVAILABLE" => "Нет в наличии",
						"SECTION_URL" => "",
						"DETAIL_URL" => "",
						"SECTION_ID_VARIABLE" => "SECTION_CODE",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_GROUPS" => "Y",
						"SET_TITLE" => "Y",
						"SET_BROWSER_TITLE" => "Y",
						"BROWSER_TITLE" => "NAME",
						"SET_META_KEYWORDS" => "N",
						"META_KEYWORDS" => "-",
						"SET_META_DESCRIPTION" => "N",
						"META_DESCRIPTION" => "-",
						"ADD_SECTIONS_CHAIN" => "N",
						"SET_STATUS_404" => "Y",
						"CACHE_FILTER" => "N",
						"ACTION_VARIABLE" => "action",
						"PRODUCT_ID_VARIABLE" => "id",
						"PRICE_CODE" => array(
						),
						"USE_PRICE_COUNT" => "N",
						"SHOW_PRICE_COUNT" => "1",
						"PRICE_VAT_INCLUDE" => "Y",
						"BASKET_URL" => "/personal/basket.php",
						"USE_PRODUCT_QUANTITY" => "N",
						"ADD_PROPERTIES_TO_BASKET" => "Y",
						"PRODUCT_PROPS_VARIABLE" => "prop",
						"PARTIAL_PRODUCT_PROPERTIES" => "N",
						"PRODUCT_PROPERTIES" => array(
						),
						"DISPLAY_COMPARE" => "N",
						"PAGER_TEMPLATE" => ".default",
						"DISPLAY_TOP_PAGER" => "N",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"PAGER_TITLE" => "Товары",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"ADD_PICT_PROP" => "-",
						"LABEL_PROP" => "-",
						"MESS_BTN_COMPARE" => "Сравнить",
						"COMPONENT_TEMPLATE" => "element_main_sections",
						"SEF_MODE" => "N",
						"SEF_RULE" => "#SECTION_CODE#",
						"SECTION_CODE_PATH" => "",
						"AJAX_OPTION_ADDITIONAL" => "",
						"SET_LAST_MODIFIED" => "N",
						"USE_MAIN_ELEMENT_SECTION" => "N",
						"PRODUCT_QUANTITY_VARIABLE" => "",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"SHOW_404" => "N",
						"MESSAGE_404" => ""
					),
					false
				);?>
			</ul>
		</section>
		<?$randPortfolio = array_rand($arResult["PORTFOLIO_RANDOM"], 1);?>
		<section class="portfolio-module">
			<?foreach($arResult["PORTFOLIO_RANDOM"][$randPortfolio]["PORTFOLIO"] as $imgPortfolio){
				$resizePhoto = CFile::ResizeImageGet($imgPortfolio, array('width'=>1280, 'height'=>1024), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				$smalPhoto = CFile::ResizeImageGet($imgPortfolio, array('width'=>405, 'height'=>405), BX_RESIZE_IMAGE_EXACT, true);?>
				<a rel="group" class="fancybox" href="<?=$resizePhoto["src"];?>"><img src="<?=$smalPhoto["src"];?>"></a>
			<?}?>
		</section>
	<?}?>
	<?if($arResult["SECTION"]["ELEMENT_CNT"] != 0){?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"catalog_section",
			Array(
				"IBLOCK_TYPE" => "catalog",
				"IBLOCK_ID" => "5",
				"SECTION_ID" => $arResult["SECTION"]["ID"],
				"SECTION_CODE" => "",
				"SECTION_USER_FIELDS" => array(0=>"",1=>"undefined",2=>"",),
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER2" => "desc",
				"FILTER_NAME" => "arrFilter",
				"INCLUDE_SUBSECTIONS" => "A",
				"SHOW_ALL_WO_SECTION" => "N",
				"PAGE_ELEMENT_COUNT" => "30",
				"LINE_ELEMENT_COUNT" => "3",
				"PROPERTY_CODE" => array(0=>"",1=>"undefined",2=>"",),
				"OFFERS_LIMIT" => "5",
				"TEMPLATE_THEME" => "blue",
				"MESS_BTN_BUY" => "Купить",
				"MESS_BTN_ADD_TO_BASKET" => "В корзину",
				"MESS_BTN_SUBSCRIBE" => "Подписаться",
				"MESS_BTN_DETAIL" => "Подробнее",
				"MESS_NOT_AVAILABLE" => "Нет в наличии",
				"SECTION_URL" => "",
				"DETAIL_URL" => "",
				"SECTION_ID_VARIABLE" => "SECTION_CODE",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SET_TITLE" => "Y",
				"SET_BROWSER_TITLE" => "Y",
				"BROWSER_TITLE" => "NAME",
				"SET_META_KEYWORDS" => "N",
				"META_KEYWORDS" => "-",
				"SET_META_DESCRIPTION" => "N",
				"META_DESCRIPTION" => "-",
				"ADD_SECTIONS_CHAIN" => "N",
				"SET_STATUS_404" => "Y",
				"CACHE_FILTER" => "N",
				"ACTION_VARIABLE" => "action",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRICE_CODE" => "",
				"USE_PRICE_COUNT" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"PRICE_VAT_INCLUDE" => "Y",
				"BASKET_URL" => "/personal/basket.php",
				"USE_PRODUCT_QUANTITY" => "N",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRODUCT_PROPERTIES" => "",
				"DISPLAY_COMPARE" => "N",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Товары",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"ADD_PICT_PROP" => "-",
				"LABEL_PROP" => "-",
				"MESS_BTN_COMPARE" => "Сравнить"
			)
		);?>
	<?}?>
	<?if(!empty($arResult["SECTION"]["PORTFOLIO"])){?>
		<section class="portfolio-module">
			<?foreach($arResult["SECTION"]["PORTFOLIO"] as $arPortfolio){
			$resizePhoto = CFile::ResizeImageGet($arPortfolio, array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$smalPhoto = CFile::ResizeImageGet($arPortfolio, array('width'=>405, 'height'=>405), BX_RESIZE_IMAGE_EXACT, true);?>
				<a rel="group" class="fancybox" href="<?=$resizePhoto["src"];?>"><img src="<?=$smalPhoto["src"];?>"></a>
			<?}?>
		</section>
	<?}?>
