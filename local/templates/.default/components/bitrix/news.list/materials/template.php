<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="main-windows materials">

  <div class='heading-text'>Материалы</div>

  <div class="materials-row">

    <? foreach ($arResult["ITEMS"] as $arItem): ?>

      <div class="materials-items width-1-3">

        <div class="materials-item-top">
          <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class='materials-item-image' alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
        </div>

        <div class="materials-item-bottom">

          <div class="heading-text-medium"><?= $arItem["NAME"] ?></div>

          <div class='materials-item-list-title'>Преимущества:</div>
          <ul class="materials-item-list">
            <? foreach ($arItem["PROPERTIES"]["advantages"]["VALUE"] as $advantages): ?>
              <li class='materials-item-elem'><?= $advantages ?></li>
            <? endforeach; ?>
          </ul>

        </div>

      </div>

    <? endforeach; ?>

  </div>

</div>