<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$menuList = array();
$lev = 0;
$lastInd = 0;
$parents = array();
foreach ($arResult as $arItem) {
	$lev = $arItem['DEPTH_LEVEL'];
	if ($arItem['IS_PARENT']) {
		$arItem['CHILDREN'] = array();
	}
	if ($lev == 1) {
		$menuList[] = $arItem;
		$lastInd = count($menuList)-1;
		$parents[$lev] = &$menuList[$lastInd];
	} else {
		$parents[$lev-1]['CHILDREN'][] = $arItem;
		$lastInd = count($parents[$lev-1]['CHILDREN'])-1;
		$parents[$lev] = &$parents[$lev-1]['CHILDREN'][$lastInd];
	}
}
$arResult = $menuList;