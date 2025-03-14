<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="main-windows">
  <div class="wooden-windows-row">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
      <div class="wooden-windows-items width-1-2">
        <div class="wooden-windows-item">
          <div class="wooden-windows-top">
            <div class="wooden-windows-item-image"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"></div>
            <div class="heading-text-medium"><?= $arItem["NAME"] ?></div>
            <div class="wooden-windows-item-text"><?= $arItem["PREVIEW_TEXT"] ?></div>
          </div>
          <div class="wooden-windows-bottom">
            <a href="#" class="wooden-windows-btn">Оформить заказ</a>
          </div>
        </div>
      </div>
    <? endforeach; ?>
  </div>
</div>