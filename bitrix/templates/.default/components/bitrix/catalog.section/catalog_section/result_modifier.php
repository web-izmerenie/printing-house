<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as $key => $arItem){

	$arResult["ITEMS"][$key]["ICON"] = CFile::GetFileArray($arItem["PROPERTIES"]["ATT_ICON"]["VALUE"]);
	unset($arItem["PROPERTIES"]["ATT_ICON"]);

}
