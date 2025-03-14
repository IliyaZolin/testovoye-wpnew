<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
  die();
}

$arrProfile = []; // По профилю
$arrGlassUnit = []; // По стеклопакету
$arrOpenMethod = []; // По способу открытия
$arrOpenMethods = []; // По способу открывания
$arrNumberValves = []; // По количеству створок
$arrShape = []; // По форме

foreach ($arResult["ITEMS"] as &$arItem) {

  foreach ($arItem["PROPERTIES"]["type_windows"]["VALUE_XML_ID"] as $type_windows) {
    if ($type_windows === 'profile') {
      array_push($arrProfile, $arItem);
    }
    if ($type_windows === 'glass_unit') {
      array_push($arrGlassUnit, $arItem);
    }
    if ($type_windows === 'opening_method') {
      array_push($arrOpenMethod, $arItem);
    }
    if ($type_windows === 'opening_methods') {
      array_push($arrOpenMethods, $arItem);
    }
    if ($type_windows === 'number_valves') {
      array_push($arrNumberValves, $arItem);
    }
    if ($type_windows === 'shape') {
      array_push($arrShape, $arItem);
    }
  }
}
$arResult["ITEMS"]["CATEGORY"]["profile"] = $arrProfile;
$arResult["ITEMS"]["CATEGORY"]["glass_unit"] = $arrGlassUnit;
$arResult["ITEMS"]["CATEGORY"]["opening_method"] = $arrOpenMethod;
$arResult["ITEMS"]["CATEGORY"]["opening_methods"] = $arrOpenMethods;
$arResult["ITEMS"]["CATEGORY"]["number_valves"] = $arrNumberValves;
$arResult["ITEMS"]["CATEGORY"]["shape"] = $arrShape;
