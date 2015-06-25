<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult["PORFOLIO_PHOTO"] = array();
if(isset($arResult["PROPERTIES"]["ATT_PORTFOLIO"]["VALUE"]) && is_array($arResult["PROPERTIES"]["ATT_PORTFOLIO"]["VALUE"]))
{
	foreach($arResult["PROPERTIES"]["ATT_PORTFOLIO"]["VALUE"] as $FILE)
	{
		$FILE = CFile::GetFileArray($FILE);
		if(is_array($FILE))
			$arResult["PORFOLIO_PHOTO"][]=$FILE;
	}
}
foreach($arResult["PROPERTIES"]["ATT_SECTIONS_CATALOG"]["VALUE"] as $sections){
	$res = CIBlockSection::GetList(array("SORT"=>"ASC"), array("ID"=>$sections, "IBLOCK_ID" => "5"), false, $arSelect = array("UF_*"));
	if($ar_res = $res->GetNext()){
		$arResult['ATT_SECTIONS'][] = $ar_res;
	}
}

foreach($arResult['ATT_SECTIONS'] as $key => $sections){
	$arResult["ATT_SECTIONS"][$key]["ICON_PATH"] = CFile::GetPath($sections['UF_ICON']);
}
