<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult)) return;

$arMenu = array();
$first = true;

foreach ($arResult as $itemIndex => $arItem) {
  if ($arItem["PERMISSION"] > "D" && $arItem["DEPTH_LEVEL"] == 1) {
    $className = '';
    if ($first) {
      $className .= ' first-item';
      $first = false;
    }
    if ($arItem['SELECTED']) {
      $className .= ' selected';
    }

    $arItem['CLASS'] = $className;
    $arMenu[] = $arItem;
  }
}

if (empty($arMenu)) return;

$arMenu[count($arMenu) - 1]['CLASS'] .= ' last-item';
?>

<div class="custim-menu">
  <ul id="left-menu" class='custim-menu-list'>
    <? foreach ($arMenu as $arItem): ?>
      <li <? if ($arItem['CLASS']) echo " class=\"" . trim($arItem['CLASS']) . "\"" ?>>
        <a class='custim-menu-elem' style="background-image: url('/upload/<?= $arItem["PARAMS"]["icon"] ?>')" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
      </li>
    <? endforeach; ?>
  </ul>
</div>