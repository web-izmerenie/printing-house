<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$arResult = array_pop($arResult);

$strReturn = '<a class="back" href="'.$arResult["LINK"].'">'.$arResult["TITLE"].'</a>';

return $strReturn;
?>
