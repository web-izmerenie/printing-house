<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
unset($arResult["SECTIONS"]);

//ORDER BY
$arSort = array(
	"sort"=>"asc",
);
//EXECUTE
$rsSections = CIBlockSection::GetList($arSort, Array("IBLOCK_ID" => 5), false, $arSelect=Array("UF_*"));
while($arSection = $rsSections->GetNext())
{
	$arResult["SECTIONS"][]=$arSection;
}

//ICON PATH
foreach($arResult['SECTIONS'] as $key => $sections){
	$arResult["SECTIONS"][$key]["ICON_PATH"] = CFile::GetPath($sections['UF_ICON']);
}
