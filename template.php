<p>Сортировать по:

<a <?if ($_GET["sort"] == "name"):?> class="actived" <?endif;?> href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=name&method=asc">
Названию
</a>

<a <?if ($_GET["sort"] == "catalog_PRICE_3"):?> class="actived" <?endif;?> href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=catalog_PRICE_3&method=asc">
Цене
</a>

<a <?if ($_GET["sort"] == "timestamp_x"):?> class="actived" <?endif;?> href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=timestamp_x&method=desc">
Новые поступления
</a>

</p>