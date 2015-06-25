<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
unset($arResult["SECTIONS"]);

//ORDER BY
$arSort = array(
	"sort"=>"asc",
);

//EXECUTE
$rsSections = CIBlockSection::GetList($arSort, Array("IBLOCK_ID" => 5), true, $arSelect=Array("UF_*"));
while($arSection = $rsSections->GetNext())
{
	$arResult["SECTIONS"][]=$arSection;
}

//ICON PATH AND PORTFOLIO
foreach($arResult['SECTIONS'] as $key => $sections){
	$arResult["SECTIONS"][$key]["ICON_PATH"] = CFile::GetPath($sections['UF_ICON']);

	foreach($sections["UF_PORTFOLIO"] as $portolio){
		if($arResult['SECTION']['ID'] == $sections['ID']){
			$arResult["SECTION"]["PORTFOLIO"][] = CFile::GetFileArray($portolio);
		}
		$arResult["SECTIONS"][$key]["PORTFOLIO"][] = CFile::GetFileArray($portolio);
	}
}

foreach($arResult["SECTIONS"] as $arPortfolio){

	if(!isset($arPortfolio["PORTFOLIO"])) continue;

	$arResult["PORTFOLIO_RANDOM"][] = $arPortfolio;
}

