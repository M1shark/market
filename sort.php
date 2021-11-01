<?if ($_GET["sort"] == "name" ||
$_GET["sort"] == "catalog_PRICE_3" ||
$_GET["sort"] == "property_PRODUCT_TYPE" ||
$_GET["sort"] == "timestamp_x"){
$arParams["ELEMENT_SORT_FIELD"] = $_GET["sort"];
$arParams["ELEMENT_SORT_ORDER"] = $_GET["method"];
}else{}?>
