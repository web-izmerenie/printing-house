<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["PROPERTIES"]["ATT_PORTFOLIO"]["VALUE"] as $portfolio){
	$arResult["PORTFOLIO"][] = CFile::GetFileArray($portfolio);
}

foreach($arResult["PROPERTIES"]["ATT_PRODUCTIONIMG"]["VALUE"] as $product){
	$arResult["PRODUCT_IMG"][] = CFile::GetFileArray($product);
}
