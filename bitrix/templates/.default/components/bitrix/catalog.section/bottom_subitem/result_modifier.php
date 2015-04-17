<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $k => $arItem){
	$arResult["ITEMS"][$k]["ICON"] = CFile::GetFileArray($arItem["PROPERTIES"]["ATT_ICON"]["VALUE"]);
}