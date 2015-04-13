<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	//ORDER BY
	$arSort = array(
		"sort"=>"asc",
	);
	//EXECUTE
	$rsSections = CIBlockSection::GetList($arSort, $arFilter, $arParams["COUNT_ELEMENTS"], $arSelect);
	while($arSection = $rsSections->GetNext())
	{
		$arResult["SECTIONS"][]=$arSection;
	}

	//ICON PATH
	foreach($arResult['SECTIONS'] as $key => $sections){
		$arResult["SECTIONS"][$key]["ICON_PATH"] = CFile::GetPath($sections['UF_ICON']);
	}
