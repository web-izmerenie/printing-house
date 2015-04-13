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