<?php

if(!empty($arResult['PROPERTIES']['detail_picture']['VALUE'])){
	$photoId = $arResult['PROPERTIES']['detail_picture']['VALUE'];
	$arPhoto = CFILe::GetFileArray($photoId);
	$arResult['PROPERTIES']['photos'][$photoId]['src'] = $arPhoto['SRC'];
}

?>