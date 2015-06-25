<?define('no_content_block', 'Y');
require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/header.php"); 
$APPLICATION->SetTitle("Печатный двор");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-slider",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",2=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",2=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	)
);?> <section id="main-text">
<div class="text">
 <span>Типография «Печатный Двор» предлагает выполнение полиграфических работ офсетным, шелкотрафаретным<br>
	 и цифровым способом печати.</span>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main-contacts",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",2=>"",),
		"PROPERTY_CODE" => array(0=>"ATT_MAIN_ADRES",1=>"ATT_MAIN_TEL",2=>"",3=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"main_catalog", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "5",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "3",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_ICON",
			1 => "",
		),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N"
	),
	false
);?>
</section> <section id="main-adventages">
	<ul>
		<li> <img src="/upload/advent-icon1.png">
		<h1>Сборный тираж</h1>
		<p>
			 возможность<br>
			 напечатать дешевле!
		</p>
		</li>
		<li> <img src="/upload/advent-icon2.png">
		<h1>Оперативная <br>
		 печать</h1>
		</li>
		<li> <img src="/upload/advent-icon3.png">
		<h1>ИНТЕРЬЕРНАЯ <br>
		 И ШИРОКОФОРМАТНАЯ <br>
		 ПЕЧАТЬ</h1>
		</li>
	</ul>
 </section>
<?require($_SERVER[ "DOCUMENT_ROOT"]. "/bitrix/footer.php");?>
