<?
$URI = substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],'?'));

if($URI == '/produktsiya/' or $_SERVER['REQUEST_URI'] == '/produktsiya/'){
	define("production_view", "Y");
}else{
	define("breadcrumb", "Y");
	define("production", "Y");
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукция");
?><a href="#" class="technical_require">Тех. требования</a>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog_sections", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "5",
		"SECTION_ID" => "",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_ICON",
			1 => "undefined",
			2 => "",
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
