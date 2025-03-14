<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="main-windows">

  <div class="heading-text">Виды окон</div>

  <div class="types-windows-row">

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По профилю:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['profile'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По стеклопакету:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['glass_unit'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По способу открытия:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['opening_method'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По способу открывания:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['opening_methods'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По количеству створок:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['number_valves'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

    <div class="types-windows-items width-1-3">
      <div class='heading-text-medium'>По форме:</div>
      <div class='types-windows-grid'>
        <? foreach ($arResult["ITEMS"]["CATEGORY"]['shape'] as $arItem): ?>
          <div class='types-windows-elem'>
            <div class='types-windows-elem-image'>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
            </div>
            <div class='types-windows-elem-name'><?= $arItem["NAME"] ?></div>
          </div>
        <? endforeach; ?>
      </div>
    </div>

  </div>

</div>