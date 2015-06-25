<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["PROPERTIES"]["ATT_TECHNOLOGY"]["VALUE"] as $elements){
	
	$res = CIBlockElement::GetList(array("SORT"=>"ASC"), array("ID"=>$elements, "IBLOCK_ID" => "7"), false, $arSelect);
	if($ar_res = $res->GetNext()){
		$arResult['ATT_ELEMENTS'][] = $ar_res;
	}
	
}